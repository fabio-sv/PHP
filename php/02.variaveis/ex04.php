<?php
$x = 5; //escopo global

function myFunc(){
    echo $x; 
    #$x gerará um erro de escopo
}
myFunc();

echo $x

?>