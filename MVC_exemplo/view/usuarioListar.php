<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
</head>
<body>
    <a href='/PB_PHP/MVC_exemplo/usuario/telaCadastro'>Ir para tela Cadastro </a>
    <h2>USUARIOS</h2>
    <table border= "1">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>ações</th>
</tr>
<?php foreach($usuarios as $id =>$u): ?>
    <tr>
        <td><?=$u['nome']?></td>
        <td><?=$u['email']?></td>
        <td>
 <a href="/PB_PHP/MVC_exemplo/usuario/telaEditar?id=<?=$id ?>">Editar</a>

<a href="/PB_PHP/MVC_exemplo/usuario/excluir?id=<?= $id?>">   Excluir</a>
     </td>
</tr>
<?php endforeach ?>
</table>

</body>
</html>