<?php
include("file_shape/Circle.php");
include("file_shape/Rect.php");
include("file_shape/Square.php");

function Circle()
{
    $circle = new Circle ('circle', 20);
    echo "Area: " . $circle->area(). '<br>';
    $circle->setRandom();
    echo 'Random Size: ' . $circle->getRadius() . '<br>';
    echo 'Area change: ' . $circle->area();
}
echo '--CIRCLE--<br><br>';
Circle();

function Rect()
{
    $rect = new Rect('rect',30);
    echo "Area" . $rect->setArea(). '<br>';
    $rect->setRandom();
    echo "Random Size: " . $rect->getSizeThird(). '<br>';
    echo 'Area change: ' .$rect->setArea(). '<br>';
}
echo '<br><br>--RECTANGLE--<br>';
Rect();
