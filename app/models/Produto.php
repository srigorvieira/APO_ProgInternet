<?php
require_once __DIR__ . '/../infra/config.php';

class Produto{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function cadastrar($nome, $preco, $fornecedor_id){
        $stmt = $this->pdo->prepare("INSERT INTO produtos (nome, preco, fornecedor_id) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $preco, $fornecedor_id]);
    }  

    public function listarTodos(){
        $stmt = $this->pdo->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

