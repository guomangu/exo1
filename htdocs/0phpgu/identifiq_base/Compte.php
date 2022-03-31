<?php
    //include "connect.php";
    

    class Compte
    {
        private $pseudo;
        private $pass;
        private $passNoHash;


        // =========

        public function __construct( string $_pseudo , string $_pass )
        {
            $this->pseudo=$_pseudo;
            $this->pass= $_pass;
        }

        /*public function __construct()
        {
            $this->revenu=23456;
            $this->nom="rResusGu";
        }*/

        // =========

        public function setPseudo(string $_pseudo){
            $this->pseudo =$_pseudo;
        }
        public function getPseudo(){
            return $this->pseudo;
        }

        public function setPass(string $_pass){
            $this->pass= $_pass;
        }
        public function getPass(){
            return $this->pass;
        }
   
        //=========

        public function identification()
        {
            include "connect.php";            
            $sql = $bdd->query(
                'SELECT * FROM personne WHERE nom = "'.$this->pseudo.'";'
            );
            $donnees = $sql->fetch( PDO::FETCH_ASSOC );

            return password_verify($this->getPass(),$donnees["pass"]);
            $sql->closeCursor();
        }
        
        //----

        public function envoi()
        {
            include "connect.php";
            $sql = $bdd->prepare('INSERT INTO personne(nom, pass) VALUES("'.$this->pseudo.'", "'.$this->pass.'")');
            $sql->execute();
            $sql->closeCursor();

            header('Location: ./info.php');
        }
    }

       
    
?>