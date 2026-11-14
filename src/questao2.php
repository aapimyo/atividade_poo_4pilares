<?php

class Produto {
    public $nome;
    public $preco;

    public function aplicarDesconto($porcentagem) {
        if ($porcentagem >= 0 && $porcentagem <= 100) {
            $desconto = $this->preco * ($porcentagem / 100);
            $this->preco = $this->preco - $desconto;
        } else {
            echo "Desconto inválido!\n";
        }
    }

    public function mostrar() {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

$produto = new Produto();

$produto->nome = "Teclado";
$produto->preco = 150;
echo "Antes do desconto:\n";
$produto->mostrar();

$produto->aplicarDesconto(10);
echo "\nDepois do desconto:\n";
$produto->mostrar();