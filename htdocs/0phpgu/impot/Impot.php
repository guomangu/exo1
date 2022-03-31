<?php
  class Impot
  {
        private $revenu;
        private $nom;


        // =========

        public function __construct( float $_revenu , string $_nom )
        {
            $this->revenu=$_revenu;
            $this->nom= $_nom;
        }

        /*public function __construct()
        {
            $this->revenu=23456;
            $this->nom="rResusGu";
        }*/

        // =========

        public function setRevenu(double $_revenu){
            $this->revenu =$_revenu;
        }
        public function getRevenu(){
            return $this->revenu;
        }
        public function setNom(string $_nom){
            $this->nom= $_nom;
        }
        public function getNom(){
            return $this->nom;
        }
   
        //=========

        public function CalculImpot()
        {
            if ($this->revenu<=15000) {
                return 0.09*$this->revenu;
            }else{
                $test=0.09*15000+($this->revenu-15000)*0.14;
                return  $test;
            }
        }

        public function ToString($_imPoPay){
            echo  ($this->getNom())." va payer ".number_format($_imPoPay, 2, '.', ' ')." € car il touche par ans ".number_format($this->getRevenu(), 2, '.', ' ')." (€).";
        }
    }

       
    
?>