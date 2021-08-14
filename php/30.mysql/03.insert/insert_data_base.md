<h1>MySql Insert</h1>

<p>
    Depois que um banco de dados e uma tabela foram criados, podemos começar a adicionar dados neles.
</p>
<p>
    A instrução INSERT INTO é usada para adicionar novos registros a uma tabela MySQL:
</p>

```sql
    INSERT INTO table_name (column1, column2, column3,...)
    VALUES (value1, value2, value3,...)
```

<p>Os exemplos a seguir adicionam um novo registro à tabela "convidados":</p>

<h3>Exemplo (orientado a objetos)</h3>

```php
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
```

<h3>Exemplo (procedural)</h3>

```php
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
```
<h3>Exemplo PDO</h3>

```php
<?php
$serve = 'localhost';
$user = 'root';
$password = '';
$dbname = 'meuDB';

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
```

