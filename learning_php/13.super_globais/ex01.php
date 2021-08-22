<?php
$x = 75; 
$y = 25;

function adicao() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
adicao();

echo $z;
//100
?>