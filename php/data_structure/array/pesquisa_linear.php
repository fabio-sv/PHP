<?php
/* Algoritmo de pesquisa linear */
$arr = array(10 ,  23 ,  15 ,  8 ,  4 ,  3 ,  25 ,  30 ,  34 ,  2 ,  19 );

$item = (int) readline("Entre com o item: ");
$check = 0;

for ($i = 0; $i < count($arr); $i++) {
    
    if($arr[$i] === $item) {
        $check += 1; 
        break;
    } 
    else {
        $check = 0;
    }
}
if ($check != 0) {
    echo "Item encontrado";
} 
else {
    echo "Item não encontrado";
}
?>