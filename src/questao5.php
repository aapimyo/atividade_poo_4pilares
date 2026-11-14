<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
    }
}

class Aluno extends Pessoa {
    public $matricula;

    public function __construct($nome, $idade, $matricula) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }

    public function mostrarCadastro() {
        $this->apresentar();
        echo "Matrícula: " . $this->matricula . "\n";
    }
}

$aluno = new Aluno("Thamily", 22, "2026001");

$aluno-> mostrarCadastro();