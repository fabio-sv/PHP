<?php
$serve = 'localhost';
$user = 'root';
$password = '';
$dbname = 'meuDB';

// cria a conexão com o banco
$conexao = mysqli_connect($serve, $user, $password, $dbname);

if ($conexao === FALSE) {
    die("Erro na conexão: " . mysqli_connect_error());
}
// Comando insert SQL
$sql = "INSERT INTO convidados(firstname, lastname, email)
VALUES ('Jane', 'Blue', 'jane@exemplo.com')";

// Verifica se a query foi executada
if (mysqli_query($conexao, $sql)) {
    echo("Cadastrado com sucess0!");
} else {
    echo("Erro: " . mysqli_error($conexao));
}
// Finaliza a conexão
mysqli_close($conexao);
?>