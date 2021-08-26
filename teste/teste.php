<?php
$cont = 0;
while ($cont < 10) {
    echo $cont .", "; // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
    $cont++;
}

myFunc();

function myFunc() {
    echo "Teste";
}
?>