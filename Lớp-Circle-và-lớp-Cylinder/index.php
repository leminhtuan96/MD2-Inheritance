<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle = new Circle(3,"blu");
$cylinder = new Cylinder(3,"blu",4);
echo $circle ->calculateArea()."<br>";
echo $circle ->calculatePerimeter()."<br>";
echo $cylinder ->calculateArea()."<br>";
echo $cylinder ->calculatePerimeter()."<br>";
