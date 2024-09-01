<?php

class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    // Método para verificar senha (simples para demonstração)
    public function verificarSenha($senha) {
        return $this->senha === $senha;
    }

    // Método para exibir informações do usuário
    public function exibirUsuario() {
        echo "Nome do Usuário: " . $this->getNome() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "-----------------------------<br>";
    }
}
