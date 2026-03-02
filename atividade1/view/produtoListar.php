<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/atividade01/produto/telaCadastro">Cadastro de Produtos </a>
    <h2>Produtos Cadastrados</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>valordavenda</th>
            <th>Quantidade em Estoque</th>
            <th>Data de Validade</th>
        </tr>
        <?php foreach($produtos as $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['valordavenda']?></td>
                <td><?= $u['quantidadedisponivel']?></td>
                <td><?= $u['dataValidade']?></td> 
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>





<?php

session_start(); 
require_once "./Model/produtoModel.php";