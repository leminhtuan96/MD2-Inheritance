<?php

include_once "Point.php";
include_once "MoveablePoint.php";

//$point = new Point(3, 4);



$moveablePoint = new MoveablePoint(1, 2, 5, 6);
print_r($moveablePoint->getXY()) . "<br>"  ;
echo "<br>". $moveablePoint->toString() . "<br>";
echo $moveablePoint->move();