<?php
// Altera dos os caracteres da chave para maiúsculo
$idade = array("JOE"=>"19", "MAIKE"=>"23", "JOHN"=>"18");

print_r(array_change_key_case($idade, CASE_LOWER))
/*
Array
(
    [joe] => 19
    [maike] => 23
    [john] => 18
)
*/
?>