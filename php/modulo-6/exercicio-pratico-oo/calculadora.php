<?php
class Calculadora {
    private float $result; 

    public function __construct() {
        $this->result = 0; 
    }
    public function clear(){
        $this->result = 0 ;
    }

    public function add($n1){
        $this->result += $n1;
       return $this->result;
    }

    public function sub($n2){
        $this->result -= $n2;
       return $this->result;
    }

    public function multiply($n3){
        $this->result *= $n3;
       return $this->result;
    }
   
    public function divide($n4){
        if( $n4 > 0){
            $this->result /= $n4;
        }else{
            echo 'Divisão não efetuada, não é possível dividir por '. $n4.'.' . '<br>';
        }
    }

    public function getResult(){
        return $this->result;
    }
}
?>