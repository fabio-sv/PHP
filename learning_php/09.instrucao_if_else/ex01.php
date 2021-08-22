<?php 
date_default_timezone_set('America/Sao_Paulo');
$hr = date('H');

// Retornara a mensagem de bom dia caso a hora sejá menor que "20"
if($hr < "20") {
   echo "Tenha um bom dia!"; 
} else {
    echo "fim";  
}
?>