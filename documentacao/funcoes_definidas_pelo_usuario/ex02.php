<?php
/* Funções definidas condicionalmente */

$my_var = true;

/* 
* Nos nao podemos chamar $myFunc daqui
* porque ela ainda não existe,
* mas nos podemos chamar myFunc2() 
*/

myFunc2(); 

if($my_var) {
    function myFunc() {
        echo "Eu não existo até que o programa passe por aqui. \n";
    }
}

/* 
* Agora nos podemos chamar myFunc()
* porque $my_var foi avaliado como true 
*/

if($my_var) myFunc();

function myFunc2() {
    echo "Eu existo imediatamente desde o programa começar. \n";
}
?>