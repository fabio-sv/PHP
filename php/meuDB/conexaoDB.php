<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbaname = 'meuDB';

// cria a conexão com o banco de dados
$conexao  = mysqli_connect($server, $user, $password, $dbaname);

// verifica se a conexão foi bem sucedida
if ($conexao != TRUE) {
    die("Erro: " . mysqli_connect_error());
}

$sql = "SELECT * FROM clientes";

if (mysqli_query($conexao, $sql)) {
    $consulta = mysqli_query($conexao, $sql);

    foreach ($consulta as $key => $value) {
        echo "{$key} => {$value} ";
        print_r($consulta);
    }    
} else {
    echo("Erro na execução do select" . mysqli_errno($conexao));
}

// finaliza a conexão com o banco de dados
mysqli_close($conexao);
?>