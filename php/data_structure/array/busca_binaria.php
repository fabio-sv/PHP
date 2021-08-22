<?php
$arr = array(16, 19, 20, 23, 45, 56, 78, 90, 96, 100);

$item = (int) readline("Informe o valor que deseja pesquisar: ");

busca_binaria($arr, $item);


function busca_binaria($vet, $item) {

    if(empty($vet) === 0) {

        $meio = (int)count($vetor) / 2;

        if($vet[$meio] < $item) {
            
        }
    }
}

   
?>