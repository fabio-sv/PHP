<?php
$serve = "localhost";
$user = "root";
$password = "";
$dbname = "meuDB";

try {
  $conn = new PDO("mysql:host=$serve;dbname=$dbname", $user, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Comando SQL
  $sql = "INSERT INTO convidados(firstname, lastname, email)
  VALUES ('Pablo', 'Murray', 'murray@exemplo.com')";
  // Executa a query
  $conn->exec($sql);
  echo "Novo registro executado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Finaliza a conexão
$conn = null;
?>