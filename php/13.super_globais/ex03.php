<!DOCTYPE html>
<html lang="pt=br">
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <span>Nome:</span>
        <input type="text" name="nome">
        <input type="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta o valor do input 
    $nome = htmlspecialchars($_REQUEST ['nome']);
    if(empty($nome)) {
        echo "Campo vazio.";
    }
    else {
        echo "Bem vindo(a) " . $nome;
    }
}
?>
</body>
</html>