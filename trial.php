<?php
//connection to database trial
$conn=mysqli_connect("localhost","root","","collinsclass");
echo '<p align="right">Copyright Me, 2008</p>';
$car = 'Porsche';
echo "Before unset(), my car is a $car";
unset($car);
//echo "After unset(), my car is a $car";
$name = 'Fiona';
$age = 28;

var_dump($name);
var_dump($age);

//echo "Connection to the server opened";
