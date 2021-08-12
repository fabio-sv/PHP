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

```php
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
```