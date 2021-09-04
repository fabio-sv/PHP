/*
* Vemos no exemplo abaixo que o uso de um construtor evita que chamemos o método set_name (), 
* o que reduz a quantidade de código:
*/

<?php
class Pessoa {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }
}

$pessoa = new Pessoa("John Doe");
echo $pessoa->get_nome(); // John Doe
?>