<?php


class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }


    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculatePerimeter()
    {
        return parent::calculatePerimeter() * $this->height;
    }

    public function toString()
    {
        return "hinh tru co: radius " . $this->radius . ", height " . $this->height . ", color " . $this->color . ", area " . $this->calculateArea() . ", perimeter " . $this->calculatePerimeter();


    }
}