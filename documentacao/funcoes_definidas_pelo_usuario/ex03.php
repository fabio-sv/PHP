<?php
/* Funções dentro de funções */

function demo_a(){
    function demo_b(){
        echo "Eu não existo até demo_a ser chamada. \n";
    }
}

/* 
* Nós não podemos chamar demo_b ainda
* porque ela ainda não foi definida. 
*/

demo_a();

/* 
* Agora nós podemos chamar demo_b,
* porque o processamento de demo_a
* tornou a primeira acessivel 
*/

demo_b();
?>