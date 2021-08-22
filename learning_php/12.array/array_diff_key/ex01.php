<?php
$arr1 = array("a"=>"Vermelho", "b"=>"azul", "c"=>"verde");
$arr2 = array("a"=>"vermelho", "c"=>"verde", "d"=>"laranja");

$resultado = array_diff_key($arr1, $arr2);

print_r($resultado);
/*
Array
(
    [b] => azul
)
*/
?>