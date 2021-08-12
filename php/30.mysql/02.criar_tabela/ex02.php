<?php
// Exemplo procedural
$serve = 'localhost';
$user = 'root';
$passaword = '';
$dbname = 'meuDB';

//Cria a conexão
$conexao = mysqli_connect($serve, $user, $passaword, $dbname);

//valida a conexao
if (!$conexao) {
    die("Falha: " . mysqli_connect_error());
}

// Cria a tabela no banco de dados
$sql = "CREATE TABLE convidados (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname  VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conexao, $sql)) {
    echo("Tabela criada com sucesso!");
} else {
    echo("Erro na criação da Tabela: " . mysqli_error($conexao));
}

// Finaliza a conexão com o banco de dados
mysqli_close($conexao);
?>