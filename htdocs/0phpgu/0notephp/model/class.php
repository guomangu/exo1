<?php
    class MyClasse{
        public function __construct()
        {
            // private $id;
        }


        // ======


        // public function getId(){
        //     return (int)$this->id;
        // }
        // public function setId($id){
        //     $this->id=(int)$id;
        // }


        // ======


        public function modifier(int $_id, array $tab){
            $sql="UPDATE tables set nom=:nom, adresse=:adresse, prix=:prix WHERE id = :id ;";
            $stat=$co->prepare($sql);

            $stat->bindParam(":id",$_id,PDO::PARAM_INT);
            $stat->bindParam(":nom",$tab[0],PDO::PARAM_STR);
            $stat->bindParam(":adresse",$tab[1],PDO::PARAM_STR);
            $stat->bindParam(":prix",$tab[2],PDO::PARAM_STR);

            $stat->execute();
            $nbLigne=$stat->rowCount();
            
            if ($nbLigne==1) {
                return "modif reussi";
            }else {
                return "modif impossible";
            }
        }

        public function afficher(int $_id)
        {
            $sql="SELECT * FROM tables where id=:id ;";
            $stat=$co->prepare($sql);

            $stat->bindParam(":id",$id,PDO::PARAM_INT);
            $stat->execute();

            return $stat->fetchALL();
        }

        public function cree(array $_tab)
        {
            $sql="INSERT INTO tables (`nom`, `adresse`, `prix`) VALUES (:nom,:adresse,:prix) ;";
            $stat=$co->prepare($sql);

            $stat->bindParam(":nom",$_tab[0],PDO::PARAM_STR);
            $stat->bindParam(":adresse",$_tab[1],PDO::PARAM_STR);
            $stat->bindParam(":prix",$_tab[2],PDO::PARAM_STR);

            $stat->execute();
            $nbLigne=$stat->rowCount();
            
            if ($nbLigne==1) {
                return "creation reussi";
            }else {
                return "creation impossible";
            }
        }

        public function suprLigne(int $_id){
            $sql=("DELETE FROM tables WHERE id=:id ;");
            $stat=$co->prepare($sql);
            $stat->bindParam(":id",$_id,PDO::PARAM_INT);

            $stat->execute();
            $nbLigne=$stat->rowCount();
            
            if ($nbLigne==1) {
                return "creation reussi";
            }else {
                return "creation impossible";
        }
    }
?>