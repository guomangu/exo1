<?php
    class Personne{
        private $_idPersonne;
        private $_argentPersonne;
        private $_nomPersonne;

        private $_Impot;

        // =========

        public function __construct(array $donnees)
        {
            $this->hydrate($donnees);
        }

	    public function hydrate(array $donnees)
        {
            foreach ($donnees as $key => $value){
                $method = 'set'.ucfirst($key);
                
                if (method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }

        // =========

        public function setIdPersonne($idPersonne){
            $this->_idPersonne = (int)$idPersonne;
        }
        public function getIdPersonne(){
            return $this->_idPersonne;
        }

        public function setArgentPersonne($argentPersonne){
            $this->_argentPersonne = (int)$argentPersonne;
        }
        public function getArgentPersonne(){
            return $this->_argentPersonne;
        }

        public function setNomPersonne($nomPersonne){
            $this->_nomPersonne = $nomPersonne;
        }
        public function getNomPersonne(){
            return $this->_nomPersonne;
        }

        public function setImpot($Impot){
            $this->_Impot = new Impot($Impot);
        }
        public function getImpot(){
            return $this->_Impot;
        }

        //=========

        public function lol($id){
            
        }
    }
?>