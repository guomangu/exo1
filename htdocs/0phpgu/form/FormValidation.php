<?php
    class FormValidation
    {
        private $arrVal=[];
        private $arrCle=[];
        //private $arrCle=array()

        // =========

        public function __construct(array $_arr)
        {
            foreach ($_arr as $key => $value) {
                array_push($this->arrVal,$key); 
                array_push($this->arrCle,$value);
            }
        }

        // =========
        public function getArrVal(){
            return $this->arrVal;
        }
        public function getArrCle(){
            return $this->arrCle;
        }
   
        //=========

        public function isFilled(){
            $bool=true;
            foreach ($_POST as $value) {
                if (empty($value)) {
                    $bool=false;
                }
            }

            foreach ($this->arrCle as $value) {
                if (empty($value)) {
                    $bool=false;
                }
            }
            return $bool;
        }

        public function isValid(){
            $bool=true;

            for ($i=0; $i < count($this->getArrVal()); $i++) { 
                $temps=$_POST[$this->arrVal[$i]];

                if (preg_match('/^[0-9]+$/',$temps)) {
                    settype($temps,"integer");
                    //echo'lol';
                }

                if(gettype($temps)!=$this->arrCle[$i]){
                    //var_dump($_POST);
                    echo(gettype($temps));
                    echo($this->arrCle[$i]);
                    $bool=false;
                }
            }
            return $bool;
        }
    }
?>