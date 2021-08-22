<?php
$serve = 'localhost'; 
$user = 'root';
$password  = '';

//Cria o banco de dados
$conexao = new mysqli($serve, $user, $password);

//Check a conexão
if ($conexao->connect_error) {
    die ("Conexão falhou: " . $con->connection_error);
} else {
    echo("Conexão bem sucedida\n");
}
    
//Criando a base de dados
$sql = "CREATE DATABASE meuDB";
if($conexao->query($sql) === TRUE) {
    echo("Base de dados criada com sucesso");
} else {
    echo("Erro na criação da base de dados: " . $conexao->error);
}

$conexao->close();
?>

