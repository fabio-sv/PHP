<?php
/* Funções Recursivas */

function recursao($a) {
    if($a < 10) {
        echo $a . ", ";
        recursao($a + 1);
    }
}

recursao(1); // 1, 2, 3, 4, 5, 6, 7, 8, 9, 
?>
