<?php
// Conte todos os valores de uma matriz:
$pessoas =  array("Joe", "Tom", "John", "Joe", "Tom");

print_r(array_count_values($pessoas));
/*
Array
(
    [Joe] => 2
    [Tom] => 2
    [John] => 1
)
*/
?>