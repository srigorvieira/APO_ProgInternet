<?php
class Cesta{

    public function listarProdutos(): array
    {
        session_start();
        return $_SESSION['carrinho'] ?? [];
    }
    
}