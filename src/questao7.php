<?php
class Forma {
    public function calcularArea() {
        return 0;
    }
}

class Retangulo extends Forma {
    public $largura;
    public $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma {
    public $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }
}

$retangulo = new Retangulo(6, 3);
$circulo =  new Circulo(10);

echo "Área do retângulo: ";
echo number_format($retangulo->calcularArea(), 2 , ',', '.') . "\n";

echo "Área do circulo: ";
echo number_format($circulo->calcularArea(), 2, ',', '.') . "\n";