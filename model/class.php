<?php 

class Calculator
{
    private $a;
    private $b;
    private $m;

    function __construct() 
    {
        $this->setA(0);
        $this->setB(0);
        $this->setM(0);
    }
    function Plus($a,$b)
    {
        $this->setA($a);
        $this->setB($b);

        return $this->getA() + $this->getB();
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

            case '%':
                return  $this->a * $this->b / 100;
            break;

            case '=':
                if($this->a == $this->b){
                return 'true';
                }
                return 'false';
            break;

            case '^':
                if($this->a < 0 && $this->b < 0){
                    return UNCORECT_NUMBER;
                }
                return pow($this->a,$this->b);
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
    function getM()
    {
        return $this->m;
    }

    private function setB($a)
    {
            $a = (int)$a;
            if(is_int($a)){
                $this->a = $a;
            }else{
                $this->a = 0;
            }
    }

    private function setA($b)
    {
            $b = (int)$b;
            if(is_int($b)){
                $this->b = $b;
            }else{
                $this->a = 0;
            }
    }

    private function setM($m)
    {
            $m = (int)$m;
            if(is_int($m)){
                $this->m = $m;
            }else{
                $this->a = 'ERROR not namber';
            }
    }
    
    public function getResult($a,$b,$c)
    {
        $this->setA($a);
        $this->setB($b);

        return $this->  checkopration($c);
    }

    public function MC()
    {
        $this->setM(0);
        return $this->getM();
    }

    public function MS($m)
    {
        $this->setM($m);
        return $this->getM();

    }

    public function MPlus($m)
    {
        
        if(is_int($m)){
            $value = $this->getM() + $m;
            $this->setM($value); 
        }else{
            return 'not number';
        }
        return $this->getM();
    }

    public function MMinus($m)
    {
        if(is_int($m)){
            $value = $this->getM() - $m;
            $this->setM($value); 
        }else{
            return 'not number';
        }
        return $this->getM();
    }

   
}