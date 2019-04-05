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
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return $this->getA() + $this->getB();
        }
    }

    function Minus($a,$b)
    {
        $this->setA($a);
        $this->setB($b);
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return $this->getA() - $this->getB();
        }
    }

    function Multiplicated($a,$b)
    {
        $this->setA($a);
        $this->setB($b);

        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return $this->getA() * $this->getB();
        }
    }

    function Devine($a,$b)
    {
        $this->setA($a);
        $this->setB($b);
        if($this->b == 0){
            return DIVIDE_BY_ZERO;
        }
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return $this->getA() / $this->getB();
        }
    }

    function Percent($a,$b)
    {
        $this->setA($a);
        $this->setB($b);
        
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return $this->getA() * $this->getB() / 100;
        }
    }

    function Equally($a,$b)
    {
        $this->setA($a);
        $this->setB($b);
        
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            if($this->a == $this->b){
                return 'true';
            }
                return 'false';
        }
    }

    function degreeOf($a,$b)
    {
        $this->setA($a);
        $this->setB($b);
        
        if($this->getA() == UNCORECT_NUMBER ||  $this->getB()  == UNCORECT_NUMBER ){
            return UNCORECT_NUMBER;
        }else{
            return pow($this->a,$this->b);
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

    private function setA($a)
    {
            $a = (int)$a;
            if(is_int($a)){
                $this->a = $a;
            }else{
                $this->a = UNCORECT_NUMBER;
            }
    }

    private function setB($b)
    {
            $b = (int)$b;
            if(is_int($b)){
                $this->b = $b;
            }else{
                $this->b = UNCORECT_NUMBER;
            }
    }

    private function setM($m)
    {
            $m = (int)$m;
            if(is_int($m)){
                $this->m = $m;
            }else{
                $this->a = UNCORECT_NUMBER;
            }
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