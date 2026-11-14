<?php
class Animal {
    public $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->setIdade($idade);
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($valor) {
        if ($valor >= 0) {
            $this->idade = $valor;
        } else {
            echo "Idade inválida para " . $this->nome . "\n";
        }
    }

    public function fazerBarulho() {
        echo "O animal faz um som.\n";
    }
}

class Cachorro extends Animal {
    public function fazerBarulho() {
        echo $this->nome . ": Au au!\n";
    }
}

class Gato extends Animal {
    public function fazerBarulho() {
        echo $this->nome . ": Miau!\n";
    }
}

class Passaro extends Animal {
    public function fazerBarulho() {
        echo $this->nome . ": Piu piu!\n";
    }
}

$cachorro = new Cachorro("Cookie", 11);
$gato = new Gato("Aya", 2);
$passaro = new Passaro("Loro", 1);

$cachorro->fazerBarulho();
$gato->fazerBarulho();
$passaro->fazerBarulho();