<?php
class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return 0;
    }
}

class Vendedor extends Funcionario {
    public $vendas;

    public function __construct($nome, $salario, $vendas) {
        parent::__construct($nome, $salario);
        $this->vendas = $vendas;
    }

    public function calcularBonus() {
        return $this->vendas * 0.05;
    }
}

class Gerente extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.20;
    }
}

$vendedor = new Vendedor("Madalena", 2000, 10000);
$gerente = new Gerente("Pandora", 5000);

echo "Vendedor: " . $vendedor->nome . "\n";
echo "Bônus: R$";
echo number_format($vendedor->calcularBonus(), 2, ',', '.') . "\n";

echo "\nGerente: " . $gerente->nome . "\n";
echo "Bônus: R$";
echo number_format($gerente->calcularBonus(), 2, ',', '.') . "\n";