<?php
// Verifica se o tipo da variável é inteiro
$x = 2021;
var_dump(is_int($x));
// bool(true)

$y = 10.23334; 
var_dump(is_int($y));
// bool(false)
?>