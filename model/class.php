<?php 

class calculator
{
    private $a;
    private $b;
    private $m;

    function __construct() 
    {
        $this->setA(0);
        $this->setB(0);
    }

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            if($this->b == 0){
               return DIVIDE_BY_ZERO;
            }
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    private function setB($a)
    {
        
            $a = (int)$a;
            if(is_int($a)){
                $this->a = $a;
            }else{
                echo 'ERROR bed namber';
                return;
            }

    }
    private function setA($b)
    {
            $b = (int)$b;
            if(is_int($b)){
                $this->b = $b;
            }else{
                echo 'ERROR bed namber';
                return;
            }
    }

    public function getResult($a,$b,$c)
    {
        $this->setA($a);
        $this->setB($b);

        return $this->  checkopration($c);
    }

   
}