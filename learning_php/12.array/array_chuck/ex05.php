<?php
// Divide o array em conjuntos de dois
$carros = array("Volvo", "Porsche", "Ford", "Mazda", "Toyota", "BMW");

print_r(array_chunk($carros, 2));
/*
Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => Porsche
        )

    [1] => Array
        (
            [0] => Ford
            [1] => Mazda
        )

    [2] => Array
        (
            [0] => Toyota
            [1] => BMW
        )

)
*/
?>