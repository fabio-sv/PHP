<?php
// Altera dos os caracteres da chave para maiúsculo
$idade = array("Joe"=>"19", "Maike"=>"23", "John"=>"18");

print_r(array_change_key_case($idade, CASE_UPPER))  // CASE_LOWER
/*
Array
(
    [JOE] => 19
    [MAIKE] => 23
    [JOHN] => 18
)
*/
?>