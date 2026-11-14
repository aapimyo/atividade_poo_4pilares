<?php
class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function mostrarDados() {
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
    }
}

class Carro extends Veiculo {
    public $quantidadePortas;

    public function __construct($marca, $modelo, $portas) {
        parent::__construct($marca, $modelo);
        $this->quantidadePortas = $portas;
    }

    public function mostrarCarro() {
        $this->mostrarDados();
        echo "Quantidade de portas: " . $this->quantidadePortas . "\n";
    }
}

class Moto extends Veiculo {
    public $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function mostrarMoto() {
        $this->mostrarDados();
        echo "Cilindradas: " . $this->cilindradas . "cc\n";
    }
}

$carro = new Carro ("Toyota", "Corolla", 4);
$moto = new Moto("Honda", "CG 160", 160);

echo "CARRO\n";
$carro->mostrarCarro();

echo "\nMOTO\n";
$moto->mostrarMoto();