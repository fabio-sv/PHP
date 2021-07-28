<?php
// Verifica se a variável é numérica
$x1 = 7474;
var_dump(is_numeric($x1));
// bool(true)

$x2 = "123";
var_dump(is_numeric($x2));
// bool(true)

$x3 = "Olá, Mundo";
var_dump(is_numeric($x3));
// bool(false)
?> 