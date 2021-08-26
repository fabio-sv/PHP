<?php
/* Obtém o número de argumentos passados para a função */

function demo() {
    $a = func_num_args();
    echo "Número de argumentos: $a \n";
}

demo(1, 2, 3); // Número de argumentos: 3 
?>