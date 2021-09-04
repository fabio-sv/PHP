<?php
/* Você pode usar a instanceofpalavra-chave para verificar se um objeto pertence a uma classe específica: */
class Pessoa {
    public $nome;
}

$pessoa = new Pessoa();
var_dump($pessoa instanceof Pessoa); //true
?>