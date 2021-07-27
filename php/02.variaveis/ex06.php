<?php
$x = 5;
$y = 10;

function myFunc() {
    global $x, $y;
    echo $y = $x + $y ."\n";
}

myFunc(); // saída 15
echo $y; // saída 15
?>