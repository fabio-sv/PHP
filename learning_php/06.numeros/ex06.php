<?php
// Tranforma float em int
$x = 2.34;
$x_cast = (int) $x;
var_dump($x_cast);
// int(2)

$y = "123";
$y_cast = (int) $y;
var_dump($y_cast);
// int(123)
?>