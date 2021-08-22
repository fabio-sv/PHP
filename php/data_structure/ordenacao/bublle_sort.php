<?php

$vetor = array(0, 9, 7, 101, 23, 44, 12, 78, 34, 23);

for($i = 0; $i < count($vetor); $i++) {

    for($j = 0; $j < count($vetor); $j++) {

        if($vetor[$i] < $vetor[$j]) {
            $temp = $vetor[$i];
            $vetor[$i] = $vetor[$j];
            $vetor[$j] = $temp;

        }
    }
}

echo "\nLista ordenada... \n";
    foreach($vetor as $list) {
        echo $list . ", ";
    }
/* 0, 7, 9, 12, 23, 23, 34, 44, 78, 101, */    
?>