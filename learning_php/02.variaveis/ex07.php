<?php
function myFunc() {
    static $x = 0;
    echo $x ."\n";
    $x++;
}

myFunc(); // saúda 0
myFunc(); // saída 1
myFunc(); // saída 2
?>