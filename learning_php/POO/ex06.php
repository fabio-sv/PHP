<?php
class Carro {
    public $modelo;
    protected $placa;
    private $chassi;
}

$carro = new Carro();
$carro->modelo = "Camaro"; // Ok
$carro->placa = "abc-2039"; // ERRO
$carro->chassi = "j774451"; // ERRO
?>