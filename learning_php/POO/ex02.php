<?php
class Pessoa {
    private $nome;

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function get_nome() {
        return $this->nome;
    }
}
// Cria o objeto pessoa instanciado da classe Pessoa
$pessoa = new Pessoa();
// Seta o nome para o objeto pessoa
$pessoa->set_nome("John Doe");
// Retorna o nome do objeto pessoa
echo $pessoa->get_nome();

?>