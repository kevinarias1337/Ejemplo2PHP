<?php

    class Sumatoria{

        private $valorSerie2;
        
        public function __construct(){
            $this->valorSerie2=0;
        }

        public function getValorserie2(){
            return $this->valorSerie2;
        }
        public function setValorserie2($valor2){
            $this->valorSerie2=$valor2;
        }
        public function sumatoriaValores(){
            $suma=0;
            for($i=1; $i<=$this->getValorserie2(); $i++){
                echo $i . " ";
                
                $suma = $suma+$i;
            }
            echo "=" . $suma;
        }
    }


?>