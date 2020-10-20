<?php
require "Cars.php";



$bmw = new Cars("red", 5, "electric");

echo $bmw->start();
echo '<br> start ok' . '<br>';
echo $bmw->forward();
echo '<br> car speed : ' . $bmw->getCurrentSpeed() . ' km/h' . '<br>';
echo $bmw->brake();
echo '<br> car speed : ' . $bmw->getCurrentSpeed() . ' km/h' . '<br>';
echo $bmw->brake();