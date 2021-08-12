<?php
$serve = 'localhost';
$user = 'root';
$passaword = '';
$dbname = 'meuDB';

//Cria a conexão com o banco
$conexao = new mysqli($serve, $user, $passaword, $dbname);
// Valida a conexão
if ($conexao->connect_error){
    die("Erro na conexão: " . $conexao->connect_error());
}
// Insere dados na 
$sql = "INSERT INTO convidados(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@exmemple.com')";


if ($conexao->query($sql) === TRUE) {
    echo "Novos dados inseridos";
}else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>