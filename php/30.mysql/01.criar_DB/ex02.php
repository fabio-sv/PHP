<?php
$serve = 'localhost'; 
$user = 'root';
$password  = '';

//Cria o banco de dados
$conexao = mysqli_connect($serve, $user, $password);

//Valida a conexão
if (!$conexao) {
    die ("Conexão falhou: " . mysqli_connect_error());
} 
//Criando a base de dados
$sql = "CREATE DATABASE meuDB";
if(mysqli_query($conexao, $sql)) {
    echo("Base de dados criada com sucesso");
} else {
    echo("Erro na criação da base de dados: " . mysqli_error($conexao));
}

mysqli_close($conexao);
?>