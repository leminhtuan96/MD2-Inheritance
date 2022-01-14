<?php

class Point3D extends Point2D
{
public $z;

    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }


    public function getZ()
    {
        return $this->z;
    }


    public function setZ($z): void
    {
        $this->z = $z;
    }

    public function getXYZ($z)
    {
        $this->z = $z;
        return array_push($z,parent::getXY());
    }

    public function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
      $this->z = $z;
    }

    public function toString()
    {
        return "thong so 3D la: ".$this->x.",".$this->y.",".$this->z;
    }
}