<?php

require_once 'controller/PedidoController.php';

$produtoId = $_POST['produtoId'];

$produtoController = new PedidoController();
$produtoController->removerDaCesta($produtoId);

echo json_encode(['status' => 'sucess', 'mensagem' => 'Produto removido da cesta com sucesso!']);
exit();