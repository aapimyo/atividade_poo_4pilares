<?php
class Livro {
    public $titulo;
    public $autor;
    public $ano;
    public $genero;

    public function exibirFicha() {
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Ano: " . $this->ano . "\n";
        echo "Genero: " . $this->genero . "\n";
    }
}

$livro = new Livro();

$livro->titulo = "O Conde de Monte Cristo";
$livro->autor = "Alexander Dumas";
$livro->ano = "1884";
$livro->genero = "Romance/Aventura";

$livro->exibirFicha();