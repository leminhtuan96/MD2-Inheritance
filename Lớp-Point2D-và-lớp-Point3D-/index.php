<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(2,5);
$point3d = new Point3D(3,4,5);
echo $point2d->toString()."<br>";
echo "<br>";
echo $point3d->toString()."<br>";
echo $point3d->getXYZ(6);
