<?php 
define("MSG", "Olá, Mundo", true);

function myFunc() {
    // Constantes são globais
    echo msg;
}

myFunc();
// Olá, Mundo
?>
