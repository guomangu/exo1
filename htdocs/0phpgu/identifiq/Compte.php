<?php
  class Compte
  {
        private $pseudo;
        private $pass;


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
            if ($this->getPseudo()=="admin") {
                if ($this->getPass()=="Cdi1234") {
                    session_start();
                    $_SESSION['co']=True;
                    header('Location: ./info.php');
                }else {
                    echo "mauvais pass";
                }
            }else {
                echo"mauvais pseudo";
            }
        }

        public function deco(){
            $_SESSION['co']=FALSE;
            header('Location: ./index.php');
        }

        //----

        public function envoi()
        {
            $sql = $this->_bdd->prepare('INSERT INTO Personne(nom, pass) VALUES('.$id.', '.$hashed_password.')');
            $sql->execute();
            $sql->closeCursor();
        }

        
    }

       
    
?>