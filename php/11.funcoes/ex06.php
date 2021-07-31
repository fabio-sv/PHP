<?php 
declare(strict_types=1);

function idade(int $idade = 0) {
    echo "Idade: " . $idade . "\n";
}

idade(19); // 19
idade(); // 0
?>
