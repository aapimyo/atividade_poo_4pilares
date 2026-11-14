<?php

class ContaBancaria {
    private $saldo = 0;

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
            echo "Deposito realizado com sucesso. \n";
        } else {
            echo "Valor de deposito inválido.\n";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo)  {
            $this->saldo = $this->saldo - $valor;
            echo "Saque realizado com sucesso.\n";
        } else {
            echo "Saldo inválido ou saldo insuficiente.\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria();

$conta->depositar(500);
$conta->sacar(150);

echo "Saldo atual: R$";
echo number_format($conta->getSaldo(), 2, ',', '.') . "\n";