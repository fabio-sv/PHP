<?php
class Pessoa {
    public $nome;
    public $idade;

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function set_idade($idade){
        $this->idade = $idade;
    }

    function get_nome(){
        return $this->nome;
    }

    function get_idadde(){
        return $this->idade;
    }
}
?>