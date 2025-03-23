<?php
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../models/Pedido.php';

class PedidoController{
    public function finalizarCompra(): array{
        if(empty($_SESSION['Cesta'])){
            return ['Sucesso' => false, 'Mensagem' => 'Cesta vazia.'];
        }

        $pedidoModel = new Pedido();
        $resultado = $pedidoModel->criarPedido($_SESSION['usuario_id'], $_SESSION['cesta']);

        if($resultado['sucesso']){
            unset($_SESSION['cesta']);
        }

        return $resultado;
    }

    public function adicionarACesta($produtoId, $quantidade = 1): void{
        session_star();

        if(!isset($_SESSION['cesta'])){
            $_SESSION['cesta'] = [];
        }

        $produto = Produto::buscarPorId($produtoId);

        if($produto){
            if(isset($_SESSION['cesta'][$produtoId])){
                $_SESSION['cesta'][$produtoId]['quantidade'] += $quantidade;
            }
            else{
                $_SESSION['cesta'][$produtoId] = ['produto' => $produto, 'quantidade' => $quantidade];
            }
        }

    }    

    public function removerDaCesta($produtoId): void
    {
        session_start();
        if (!isset($_SESSION['cesta'])) {
            return;
        }

        if (isset($_SESSION['cesta'][$produtoId])) {
            unset($_SESSION['cesta'][$produtoId]);
        }

        if (empty($_SESSION['cesta'])) {
            unset($_SESSION['cesta']);
        }
    }

    public function listaCesta(): array{
        return $_SESSION['cesta'] ?? [];
    }
}