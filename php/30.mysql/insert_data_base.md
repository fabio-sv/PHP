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
<p>
    <h3><b>exemplo</b></h3>
</p>

<a href="https://github.com/fabio-sv/PHP/blob/main/php/30.mysql/03.insert/ex01.php">
<div>
```php
//MySqli orientado a objetos
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
```php
</div>
</a>

