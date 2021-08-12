<?php
// Exemplo orientado a objetos
$serve = 'localhost';
$user = 'root';
$passaword = '';
$dbname = 'meuDB';

//Cria a conexão
$conexao = new mysqli($serve, $user, $passaword, $dbname);

//valida a conexao
if ($conexao->connect_error) {
    die("Falha: " . $conexao->connect_error);
}

// Cria a tabela no banco de dados
$sql = "CREATE TABLE convidados (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname  VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conexao->query($ql) === TRUE) {
    echo("Tabela criada com sucesso!");
} else {
    echo("Erro na criação da Tabela: " . $conexao->error);
}

// Finaliza a conexão com o banco de dados
$conexao->close();
?>