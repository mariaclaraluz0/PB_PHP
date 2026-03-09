<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela editar</title>
</head>
<body>
   <a href="/PB_PHP/atividade_avaliativa/livro/listar">ir para tela listar</a>
    <form method= "POST" action="atualizar?id=<?=$_GET['id']?>"> 
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
        <input type="text" name="titulo" value="<?=htmlspecialchars($livro['titulo'])?>"require>  
        <input type="text" name="autor" value="<?=htmlspecialchars($livro['autor'])?>"require>
        <input type="text" name="ano de publicação" value="<?=htmlspecialchars($_GET['ano_publicacao'])?>"disabled>
        <button type="submit">Enviar</button>
</form>

</body>
</html>