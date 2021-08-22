<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <span>Nome:</span>
        <input type="text" name="nome">
        <input type="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta o nome do usuário
    $nome = $_POST['nome'];
    if(empty($nome)) {
        echo "Nome está vazio.";
    }
    else {
        echo $nome;
    }
}
?>
</body>
</html>