<?php
$nome = array("Joe", "Make", "Tom");
$idade = array(25, 19, 28);

print_r(array_combine($nome, $idade))
/*
Array
(
    [Joe] => 25
    [Make] => 19
    [Tom] => 28
)
*/
?>