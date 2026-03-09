<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar livros</title>
</head>
<body>
    <a href="/PB_PHP/atividade_avaliativa/livro/telaCadastro">Ir para tela Cadastro </a>
    <h2>livros</h2>
    <table border= "1">
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>autor</th>
            <th>titulo</th>
            <th>anodepublicação</th>


</tr>
<?php foreach($livro as $id =>$u): ?>
    <tr>
        <td><?=$u['id']?></td>
        <td><?=$u['titulo']?></td>
        <td><?=$u['autor']?></td>
        <td><?=$u['titulo']?></td>
        <td><?=$u['anodepublicação']?></td>
        <td>
    <a href="/PB_PHP/atividade_avaliativa/livro/telaEditar?id=<?=$id ?>">Editar</a>

<a href="/PB_PHP/atividade_avaliativa/livro/excluir?id=<?= $id?>">   Excluir</a>
     </td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>