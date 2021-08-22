# Variáveis globais de PHP - superglobais

## Variáveis globais de PHP - superglobais

Algumas variáveis predefinidas em PHP são "superglobais", o que significa que estão sempre acessíveis, independentemente do escopo - e você pode acessá-las de qualquer função, classe ou arquivo sem ter que fazer nada especial.

As variáveis superglobais do PHP são:

- $ GLOBALS
- $ _SERVER
- $ _REQUEST
- $ _POST
- $ _GET
- $ _FILES
- $ _ENV
- $ _COOKIE
- $ _SESSION



## PHP $ GLOBALS

$ GLOBALS é uma variável superglobal do PHP que é usada para acessar variáveis globais de qualquer lugar no script PHP (também de funções ou métodos).

O PHP armazena todas as variáveis globais em um array chamado $ GLOBALS [ *index* ]. O *índice* contém o nome da variável.

O exemplo abaixo mostra como usar a variável superglobal $ GLOBALS:

```php
<?php
$x = 75; 
$y = 25;

function adicao() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
adicao();

echo $z;
//100
?>
```

# PHP Superglobal - $ _SERVER

## PHP $ _SERVER

$ _SERVER é uma variável superglobal do PHP que contém informações sobre cabeçalhos, caminhos e locais de script.

O exemplo abaixo mostra como usar alguns dos elementos em $ _SERVER:

```php
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
```

A tabela a seguir lista os elementos mais importantes que podem estar dentro de $ _SERVER:

| Código                        | Descrição                                                    |
| ----------------------------- | ------------------------------------------------------------ |
| $_SERVER['PHP_SELF']          | Retorna o nome do arquivo do script atualmente em execução.  |
| $_SERVER['GATEWAY_INTERFACE'] | Retorna a versão da Common Gateway Interface (CGI) que o servidor está usando. |
| $_SERVER['SERVER_ADDR']       | Retorna o endereço IP do servidor host.                      |
| $_SERVER['SERVER_NAME']       | Retorna o nome do servidor host.                             |
| $_SERVER['SERVER_SOFTWARE']   | Retorna a string de identificação do servidor (como Apache / 2.2.24). |
| $_SERVER['SERVER_PROTOCOL']   | Retorna o nome e a revisão do protocolo de informação (como HTTP / 1.1). |
| $_SERVER['REQUEST_METHOD']    | Retorna o método de solicitação usado para acessar a página (como POST). |
| $_SERVER['REQUEST_TIME']      | Retorna o carimbo de data / hora do início da solicitação (como 1377687496). |
| $_SERVER['QUERY_STRING']      | Retorna a string de consulta se a página for acessada por meio de uma string de consulta. |
| $_SERVER['HTTP_ACCEPT']       | Retorna o cabeçalho Aceitar da solicitação atual.            |
| $_SERVER['HTTP_REFERER']      | Retorna o URL completo da página atual (não confiável porque nem todos os agentes de usuário o suportam). |
| $_SERVER['HTTPS']             | O script é consultado por meio de um protocolo HTTP seguro.  |
| $_SERVER['REMOTE_ADDR']       | Retorna o endereço IP de onde o usuário está visualizando a página atual. |
| $_SERVER['REMOTE_HOST']       | Retorna o nome do host de onde o usuário está visualizando a página atual. |
| $_SERVER['REMOTE_PORT']       | Retorna a porta que está sendo usada na máquina do usuário para se comunicar com o servidor web. |
| $_SERVER['SCRIPT_FILENAME']   | Retorna o caminho absoluto do script atualmente em execução. |
| $_SERVER['SERVER_ADMIN']      | Retorna o valor dado à diretiva SERVER_ADMIN no arquivo de configuração do servidor web (se o seu script for executado em um host virtual, será o valor definido para aquele host virtual) (como alguem@exemplo.com). |
| $_SERVER['SERVER_PORT']       | Retorna a porta na máquina servidora que está sendo usada pelo servidor da web para comunicação (como 80). |
| $_SERVER['SERVER_SIGNATURE']  | Retorna a versão do servidor e o nome do host virtual que são adicionados às páginas geradas pelo servidor. |
| $_SERVER['PATH_TRANSLATED']   | Retorna o caminho baseado no sistema de arquivos para o script atual. |
| $_SERVER['SCRIPT_NAME']       | Retorna o caminho do script atual.                           |
| $_SERVER['SCRIPT_URI']        | Retorna o URI da página atual.                               |

## PHP $ _REQUEST

PHP $ _REQUEST é uma variável superglobal do PHP que é usada para coletar dados após o envio de um formulário HTML.

O exemplo abaixo mostra um formulário com um campo de entrada e um botão de envio. Quando um usuário envia os dados clicando em "Enviar", os dados do formulário são enviados para o arquivo especificado no atributo ``action`` da tag `` <form>``. Neste exemplo, apontamos para o próprio arquivo para processamento de dados de formulário. Se você deseja usar outro arquivo PHP para processar dados de formulário, substitua-o pelo nome de arquivo de sua escolha. Então, podemos usar a variável super global $ _REQUEST para coletar o valor do campo de entrada:

```php
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
```

## PHP $ _POST

PHP $ _POST é uma variável superglobal do PHP que é usada para coletar dados de formulário após o envio de um formulário HTML com method = "post". $ _POST também é amplamente usado para passar variáveis.

O exemplo abaixo mostra um formulário com um campo de entrada e um botão de envio. Quando um usuário envia os dados clicando em "Enviar", os dados do formulário são enviados para o arquivo especificado no atributo ``action`` da tag ``<form>``. Neste exemplo, apontamos para o próprio arquivo para processar os dados do formulário. Se você deseja usar outro arquivo PHP para processar dados de formulário, substitua-o pelo nome de arquivo de sua escolha. Então, podemos usar a variável superglobal $ _POST para coletar o valor do campo de entrada:

```php
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
```

## PHP $ _GET

PHP $ _GET é uma variável superglobal do PHP que é usada para coletar dados de formulário após o envio de um formulário HTML com method = "get".

$ _GET também pode coletar dados enviados na URL.

Suponha que temos uma página HTML que contém um hiperlink com parâmetros:

```html
<html>
<body>

<a href="ex05b.php?subject=PHP&web=Google">Test $GET</a>

</body>
</html>
```

Quando um usuário clica no link "Test $ GET", os parâmetros "subject" e "web" são enviados para "test_get.php", e você pode acessar seus valores em "test_get.php" com $ _GET.

O exemplo abaixo mostra o código em "test_get.php":

```php
<html>
<body>
<?php

echo "Estude ". $_GET['subject'] . " no " . $_GET['web'];
?>

</body>
</html>
```

