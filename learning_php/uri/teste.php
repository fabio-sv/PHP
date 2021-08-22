<?php
// coleta dados das espécies
$numero_teste = (int)readline();
$i = 0;

while($numero_teste > $i){
    $quantia = readline();
    $quantia = explode(' ', $quantia);
    $valor;
    $tipo;
    $arr = array();
    
    if ($quantia[0] > 0 and $quantia[0] < 16){
        $valor = (int)$quantia[0];
        $tipo = $quantia[1];
        $arr[$i] = array($tipo => $valor);
    }
    $i++;
}
// soma das espécies
print_r($arr);
?>