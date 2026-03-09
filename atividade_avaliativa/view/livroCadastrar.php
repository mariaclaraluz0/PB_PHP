<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela cadastar</title>
</head>
<body>
   <a href="/PB_PHP/atividade_avaliativa/livro/listar">ir para tela listar </a>
   <form method="POST" action="salvar">
        <input type="text" name="editora" placeholder="editora" require>
        <input type="text" name="titulo" placeholder="titulo" require>
        <input type="text" name="autor" placeholder="autor" require>
        <input type="text" name="ano_publicacao" placeholder="ano de publicação" require>
        <button type="submit">Enviar</button>
</form>
</body>
</html>