<?php
$j = 0;
$arr = array();
$rep = (int)readline();

do {
    $scan = readline();
    $scan = explode(' ', $scan);

    $x = (int)$scan[0];
    $y = (int)$scan[1];
    // calcula imparares entre X e Y
    if ($x < $y){
        $soma = 0;
        for($i = $x; $i < $y; $i++) {
            if($i % 2 != 0 and $i != $x and $i != $y) {
                $soma = $soma + $i;
            }
        }
        $arr[$j] = $soma;
    }
    // calcula imparares entre Y e X
    elseif ($x > $y){
        $soma = 0;
        for($i = $y; $i < $x; $i++) {
            if($i % 2 != 0 and $i != $x and $i != $y) {
                $soma = $soma + $i;
            }
        }
        $arr[$j] = $soma;
    }
    else {
        $arr[$j] = 0;
    }
    $j++;

}while($j < $rep);
// sequência dos valores ímpares
foreach ($arr as $value) {
    echo $value . "\n";
}
?>