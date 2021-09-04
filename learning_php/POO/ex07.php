<?php
class Carro {
    public $marca;
    public $placa;
    public $chassis;

    function set_marca($marca) {
        $this->marca = $marca;
    }

    protected function set_placa($placa){
        $this->placa = $placa;
    }

    private function set_chassi($chassi){
        $this->chassi = $chassi;
    }
}

$carro = new Carro();
$carro->set_marca("Camaro"); // Ok
$carro->set_placa("abc-1234"); // ERRO
$carro->set_chassi("j78787"); // ERRO
?>