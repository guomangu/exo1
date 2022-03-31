<?php
  class MyString
  {
        private $str;


        // =========

        public function __construct(string $_str )
        {
            $this->str=$_str;
        }

        // =========

        public function setStr(string $_str){
            $this->str =$_str;
        }
        public function getStr(){
            return $this->str;
        }
   
        //=========

        public function lenght(){
            return strlen($this->str);
        }

        public function charAt(int $_nbStart,int $_nbContinue){
            return substr($this->str,$_nbStart,$_nbContinue);
        }

        public function indexOf($_chaineRechercher,$_nbStart){
            return strrpos($this->str,$_chaineRechercher,$_nbStart);
        }

        public function substring(int $_nbStart,int $_nbContinue){
            return substr($this->str,$_nbStart,$_nbContinue);
        }

        public function split($_longMax){
            return str_split($this->str,$_longMax);
        }
        
        public function toLowerCase(){
            return strtolower($this->str);
        }

        public function toUpperCase(){
            return strtoupper($this->str);
        }
    }

       
    
?>