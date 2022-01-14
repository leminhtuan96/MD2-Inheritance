<?php
include_once "Point.php";

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }


    public function getXSpeed()
    {
        return $this->xSpeed;
    }


    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }


    public function getYSpeed()
    {
        return $this->ySpeed;
    }


    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "vi tri sau di chuyen: " . $this->x . "," . $this->y;


    }

    public function toString()
    {
        return "MoveablePoint: " . $this->x . ", " . $this->y . ", " . $this->xSpeed . ", " . $this->ySpeed;
    }
}