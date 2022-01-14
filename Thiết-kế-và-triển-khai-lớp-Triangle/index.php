<?php

include_once "Shape.php";
include_once "Triangle.php";

$triangle = new Triangle("Triangle1", 3, 4, 5);
echo $triangle->getPerimeter() . "<br>";
echo $triangle->getArea() . "<br>";
echo $triangle->toString();