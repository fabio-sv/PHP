<?php
$vetor = array();

$num = (int)readline("Entre com o tamanho do vetor: ");

for ($i = 0; $i < $num; $i++) {
    $item = (int)readline("Insira o elemento ". $i . ": ");
    $vetor[$i] = $item;
}

echo "\nVetor antes da ordenação: ";
print_r($vetor);

echo "\nVetor após a ordenação: ";
bucket_sort($vetor, $num);
print_r($vetor);

function bucket_sort($arr, $num) {

    $count = array();

    for($i = 0; $i < $num; $i++) {
        $count[$i] = $arr[$i];
    }
    
    for($i = 0, $j = 0; $i < $num; $i++) {
        for(;$count[$i] < 0; $count[$i]--) {
            $arr[$j++] = $i;
        }
    }
    
}
?>