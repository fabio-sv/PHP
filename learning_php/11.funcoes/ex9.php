<?php 
function acumulaSoma(&$valor) {
    $valor += 5;
}
$num = 2;
acumulaSoma($num);

echo $num;
// 7
?>