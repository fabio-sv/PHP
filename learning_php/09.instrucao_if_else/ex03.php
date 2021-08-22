<?php 
date_default_timezone_set('America/Sao_Paulo');
$hr = date("H");

if($hr < "12") {
    echo "Tenha uma boa manhã!";
} elseif ($hr < "20")  {
    echo "Tenha uma boa tarde!";
} else {
    echo "Tenha uma boa noite!";
}
?>
