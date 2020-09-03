<?php
class Calc{
    public $oper;
    public $num1;
    public $num2;


    public function __construct($oper, int $num1 , int $num2 ){
            $this->oper = $oper;
            $this->num1 = $num1;
            $this->num2 = $num2;
    }
    public function calculator(){
        switch ($this->oper) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            
            default:
                echo "Error";
                break;
        }
    }
}

?>