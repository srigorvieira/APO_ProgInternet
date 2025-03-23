<?php
require_once __DIR__ . '/../models/Fornecedor.php';

class FornecedorController{
    public function listarFornecedores(): false|array
    {
        return Fornecedor::listarTodos();
    }

    public function cadastrarFornecedor($nome): string{
        Fornecedor::cadastrar($nome);
        return "Fornecedor cadastrado com sucesso";
    }
}