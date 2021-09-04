<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function intro(){
        echo "\nO nome é {$this->nome} e a idade é {$this->idade} anos.";
    }
}

class Cliente extends Pessoa {
    public function mensagem(){
        echo "\nQuem é a pesssoa?";
    }
}

$cliente = new Cliente("John Doe", 26);
$cliente->mensagem();
$cliente->intro();

// Quem é a pesssoa?
// O nome é John Doe e a idade é 26 anos.
?>