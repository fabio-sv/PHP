<?php 
declare(strict_types=1);

function soma(float $a, float $b) : int {
    return (int) ($a + $b);
}

echo soma(5.1, 5.2);
// 10
?>
