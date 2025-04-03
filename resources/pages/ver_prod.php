<?php
require_once '../../app/controller/ProdutoController.php';
require_once '../../app/infra/helper.php';
verificarAutenticacao();

$produtoController = new ProdutoController();
$produtos = $produtoController->listarProdutos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Produtos</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #212121;
            font-family: 'JetBrains Mono', monospace;
            color: white;
        }
    </style>

    <script src="/resources/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Lista de Produtos</h1>

    <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>

    <div id="mensagem" class="alert alert-info d-none"></div>

    <?php if (count($produtos) > 0): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Fornecedor</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?php echo $produto['id']; ?></td>
                    <td><?php echo $produto['nome']; ?></td>
                    <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo $produto['fornecedor_id']; ?></td>
                    <td>
                        <button class="btn btn-primary" onclick="adicionarAoCarrinho(<?php echo $produto['id']; ?>)">Adicionar a sua cesta</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">Nenhum produto cadastrado.</p>
    <?php endif; ?>
</div>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>