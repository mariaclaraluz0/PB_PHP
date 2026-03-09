<?php

require_once "Controller/livroController.php";

$livroController = new livroController();
$route = $_GET["route"] ?? '';


switch ($route){
    case 'livro/telaCadastro':
        $livroController->telaCadastro();
        break;

    case "livro/salvar":
        $livroController->cadastrar();
        break;

    case "livro/listar":
        $livroController->listarlivro();
        break;

    case "livro/telaEditar":
        $livroController->telaEditar();
        break;

    case "livro/atualizar":
        $livroController->atualizar();
        break;

    case "livro/excluir":
        $livroController->excluir();
        break;

    default:
    echo "pagina não encontrada";
    break;
}