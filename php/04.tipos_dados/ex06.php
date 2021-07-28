<?php
class Carro {
    public $cor;
    public $modelo;
    // Construtor da classe
    public function __construct($cor, $modelo) {
        $this->cor = $cor;
        $this->modelo = $modelo;
    }

    public function mensagem() {
        return "Meu carro é um " . $this->modelo . " de cor " . $this->cor . "\n";
    }
}
// Objeto 1
$meuCarro = new Carro("Preto", "Ford");
echo $meuCarro->mensagem();
// Meu carro é um Ford de cor Preto

$meuCarro2 = new Carro("Vermelho", "Porsche");
echo $meuCarro2->mensagem();
// Meu carro é um Porsche de cor Vermelho
?>