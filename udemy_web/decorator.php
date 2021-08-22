<?php
/* Interface Carro */
interface Carro {
    public function equipar();
}

/* Classe carro base */
class CarroBase implements Carro {
    /** @override */
    public function equipar() {
        echo "\nEssa é uma carro base.\n";
    }
}

/* Classe carro decorator */
class CarroDecorator implements Carro {
    protected $carro; 

    public function __construct(Carro $carro) {
        $this->carro = $carro;
    }

    /** @override */
    public function equipar() {
        $this->carro->equipar();
    }
}

/* Classe Som */
class Som extends CarroDecorator {

    public function __construct(Carro $carro) {
        parent::__construct($carro);
    }

    /** @override */
    public function equipar() {
        parent::equipar();
        echo "Adicionando som ao carro.\n";
    }
}

/* Classe Insulfilm */
class Insulfilm extends CarroDecorator {
   
    public function equipar() {
        parent::equipar();
        echo "Adicionando silenciador a carro. \n";
    }
}

/* Monta uma carro com som e com Insulfilm */
$carroCompleto = new Insulfilm( new Som ( new CarroBase()));
$carroCompleto->equipar();

/* Monta um carro sem acessórios */
$carroB = new CarroBase();
$carro->montar();

/* Monta um carro com Insulfilm. */
$carroComInsufilm = new Insulfilm( $carroB );
$carroComInsufilm->montar();

/* Monta um carro com Som. */
$carroComSom = new Som( $carro );
$carroComSom->montar();
?>