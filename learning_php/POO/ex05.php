<?php
class Pessoa {
    public $nome;

    function __construct($nome) {
        $this->nome = $nome;
    }

    function __destruct() {
        echo "A pessoa é {$this->nome}.";
    }
}

$pessoa = new Pessoa("John Doe");
// A pessoa é John Doe.
?>