<?php
// Compare as chaves e valores de duas matrizes e retorne as diferenças:$arr1 = array("cor1"=>"vermelho", "cor2"=>"amarelo", "cor3"=>"laranja", "cor4"=>"violeta");
$arr1 = array("cor1"=>"vermelho", "cor2"=>"amarelo", "cor3"=>"laranja", "cor4"=>"violeta");
$arr2 = array("cor5"=>"vermelho", "cor6"=>"amarelo", "cor7"=>"laranja");

$resultado = array_diff_assoc($arr1, $arr2);
print_r($resultado);
/*
Array
(
    [cor1] => vermelho
    [cor2] => amarelo 
    [cor3] => laranja 
    [cor4] => violeta 
)
P
*/
?>