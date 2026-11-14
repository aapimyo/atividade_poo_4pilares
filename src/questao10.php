<?php
class Usuario {
    public $nome;
    private $senha = "";

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->setSenha($senha);
    }

    public function setSenha($novaSenha) {
        if ($novaSenha != "") {
            $this->senha = $novaSenha;
            echo "Senha cadastrada com sucesso.\n";
        } else {
            echo "A senha não pode ficar vazia.\n";
        }
    }

    public function verificarSenha($senhaDigitada) {
        return $this->senha === $senhaDigitada;
    }

    public function listarPermissoes() {
        return array("Acessar sistema");
    }
}

class Admin extends Usuario {
    public function listarPermissoes() {
        return array(
            "Acessar sistema",
            "Cadastrar usuários",
            "Editar usuários",
            "Excluir usuários"
        );
    }
}

class Cliente extends Usuario {
    public function listarPermissoes() {
        return array(
            "Acessar sistema",
            "Visualizar produtos",
            "Realizar compras"
        );
    }
}

$admin = new Admin("Robson", "admin123");
$cliente = new Cliente("Débora", "cliente654");

echo "\nAdministrador: " . $admin->nome . "\n";
echo "Permissões:\n";

foreach ($admin->listarPermissoes() as $permissao) {
    echo "- " . $permissao . "\n";
}

echo "\nCliente: " . $cliente->nome . "\n";
echo "Permissões:\n";

foreach ($cliente->listarPermissoes() as $permissao) {
    echo "- " . $permissao . "\n";
}

echo "\nVerificação de senha do administrador: ";

if ($admin->verificarSenha("admin123")) {
    echo "Senha correta.\n";
} else {
    echo "Senha incorreta.\n";
}