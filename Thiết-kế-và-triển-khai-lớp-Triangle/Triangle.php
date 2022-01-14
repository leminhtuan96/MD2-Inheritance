<?php

class Triangle extends Shape
{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3= 1.0;
    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }


    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide1($side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide2($side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide3($side3): void
    {
        $this->side3 = $side3;
    }
    public function getPerimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }
    public function getArea()
    {
        $p = $this->getPerimeter()/2;
        return pow($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3), 0.5);
    }
    public function toString()
    {
        return $this->name.": ".$this->side1.", ".$this->side2.", ".$this->side3;
    }

}
