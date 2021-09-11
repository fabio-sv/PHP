<?php
// Implementação da interface Carro:
interface Carro {
    
    public function montar();
}

//Implementação da classe CarroBase:
class CarroBase implements Carro {
    
    public function montar() {
        echo "\nEsse é um carro base.\n";
    }
}

//Implementação da classe CarroDecorator:
class CarroDecorator implements Carro {
    protected $carro; 

    public function __construct(Carro $carro) {
        $this->carro = $carro;
    }

    public function montar() {
        $this->carro->montar();
    }
}

// Implementação da classe Som:
class Som extends CarroDecorator {
    public function __construct(Carro $carro) {
        parent::__construct($carro);
    }

    /** @override */
    public function montar() {
        parent::montar();
        echo "Adicionando som ao carro.\n";
    }
}

// Implementação da classe Alarme:
class Alarme extends CarroDecorator {
    public function __construct(Carro $carro) {
        parent::__construct($carro);
    }

    /** @override */
    public function montar() {
        parent::montar();
        echo "Adicionando alarme ao carro.\n";
    }
}

/* Monta um carro com alarme e com som. */
$carroCompleto = new Alarme( new Som( new CarroBase() ) );
$carroCompleto->montar();

/* Monta um carro sem acessórios. */
$carroB = new CarroBase();
$carroB->montar();

/* Monta uma carro com alarme. */
$carroComAlarme = new Alarme($carroB);
$carroComAlarme->montar();

/* Monta uma carro com som. */
$carroComSom = new Som($carroB);
$carroComSom->montar();
?>