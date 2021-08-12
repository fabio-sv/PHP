<?php
declare(strict_types=1);

$scan = readline("Informe o valor de X é de Y: ");
$scan = explode(' ', $scan);

$x = (int)$scan[0];
$y = (int)$scan[1];

var_dump($x, $y);
// int(10)
// int(20)
?>