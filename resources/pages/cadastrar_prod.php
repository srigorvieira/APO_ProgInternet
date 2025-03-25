<?php
verificarAutenticacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #212121;
            font-family: 'JetBrains Mono', monospace;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Cadastro de Produtos</h1>

    <button onclick="window.history.back();" class="btn btn-secondary mb-3">Voltar</button>

    <div id="mensagem" class="alert alert-info d-none"></div>

    <form id="formProduto" method="POST" action="../../app/cadastrar_prod.php" class="mt-4">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" name="preco" id="preco" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fornecedor_id" class="form-label">Fornecedor:</label>
            <select name="fornecedor_id" id="fornecedor_id" class="form-select" required></select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<script src="/resources/js/bootstrap.bundle.min.js"></script>
</body>
</html>