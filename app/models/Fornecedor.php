<?php
require_once __DIR__ . '/../infra/config.php';

class Fornecedor{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function cadastrar($nome){
        $stmt = $this->pdo->prepare("INSERT INTO fornecedores (nome) VALUES (?)");
        return $stmt->execute([$nome]);
    }

    public function listar(){
        $stmt = $this-pdo->query("SELECT * FROM fornecedores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}