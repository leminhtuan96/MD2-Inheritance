<?php

class Circle
{

    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function toString(){
        return "hinh tron co: radius ".$this->radius.",Color: ".$this->color.",are: ".$this->calculateArea().",perimeter ".$this->calculatePerimeter();
    }
}