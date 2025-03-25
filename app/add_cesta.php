<?php
session_start();
require_once 'controller/PedidoController.php';

$produtoId = $_POST['produtoId'];
$quantidade = $_POST['quantidade'] ?? 1;

$produtoController = new PedidoController();
$produtoController->adicionarNaCesta($produtoId, $quantidade);

header('Location: ../resources/pages/carrinho.php');
exit();