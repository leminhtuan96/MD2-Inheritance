<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function getX()
    {
        return $this->x;
    }


    public function setX($x): void
    {
        $this->x = $x;
    }


    public function getY()
    {
        return $this->y;
    }


    public function setY($y): void
    {
        $this->y = $y;
    }


    public function getXY()
    {
        $arr = [];
      $arr[] = $this->x;
      $arr[] = $this->y;
       return $arr;

    }

    public function setXY($x, $y)
    {
        $this->x =$x;
        $this->y =$y;

//      $xy = array($x,$y);
    }

    public function toString()
    {
        return "thong so cua Point la: " . $this->x . "," . $this->y;
    }
}