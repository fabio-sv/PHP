<?php
// Implementação da interface Carro:
interface Carro {
    
    public function equipar();
}

//Implementação da classe CarroBase:
class CarroBase implements Carro {
    
    public function equipar() {
        echo "\nEsse é um carro base.\n";
    }
}

//Implementação da classe CarroDecorator:
class CarroDecorator implements Carro {
    protected $carro; 

    public function __construct(Carro $carro) {
        $this->carro = $carro;
    }

    public function equipar() {
        $this->carro->equipar();
    }
}

// Implementação da classe Som:
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

// Implementação da classe Alarme:
class Alarme extends CarroDecorator {
    public function __construct(Carro $carro) {
        parent::__construct($carro);
    }

    /** @override */
    public function equipar() {
        parent::equipar();
        echo "Adicionando alarme ao carro.\n";
    }
}

/* Monta um carro com alarme e com som. */
$carroCompleto = new Alarme( new Som( new CarroBase() ) );
$carroCompleto->equipar();

/* Monta um carro sem acessórios. */
$carroB = new CarroBase();
$carroB->equipar();

/* Monta uma carro com alarme. */
$carroComAlarme = new Alarme($carroB);
$carroComAlarme->equipar();

/* Monta uma carro com som. */
$carroComSom = new Som($carroB);
$carroComSom->equipar();
?>