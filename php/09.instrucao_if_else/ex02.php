<?php 
date_default_timezone_set('America/Sao_Paulo');
$hr = date("H");

if($hr < "20") {
    echo "Tenha um bom dia!";
} else {
    echo "Tenha uma boa noite!";
}
?>