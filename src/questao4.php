<?php
class Funcionario {
    private $salario = 0;

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($valor) {
        if ($valor >= 0) {
            $this->salario = $valor;
            echo "Salário atualizado.\n";
        } else {
            echo "O salário não pode ser negativo.\n";
        }
    }
}

$funcionario = new Funcionario();

$funcionario->setSalario(2500);
echo "Salário: R$";
echo number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(-500);

echo "Salário atual: R$";
echo number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
