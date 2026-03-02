<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela editar</title>
</head>
<body>
    <a href="/PB_PHP/MVC_exemplo/usuario/listar">ir para tela listar</a>
    <form method= "POST" action="atualizar?id=<?=$_GET['id']?>">
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
        <input type="text" name="nome" value="<?=htmlspecialchars($usuario['nome'])?>"require>
        <input type="text" name="email" value="<?=htmlspecialchars($usuario['email'])?>"require>
        <button type="submit">Enviar</button>
    </form> 
</body>
</html>