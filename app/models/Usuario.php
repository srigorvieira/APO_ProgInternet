<?php
require_once __DIR__ . '/../infra/config.php';

class Usuario{
    private $pdo;
    
    public static function cadastrar($nome, $email, $senha): void
    {
        global $pdo;
        $senhaHash = hash('sha256', $senha);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senhaHash]);
    }
    
    public static function autenticar($email, $senha) {
        global $pdo;
        $senhaHash = hash('sha256', $senha);
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email, 'senha' => $senhaHash]);
        return $stmt->fetch();
    }
}