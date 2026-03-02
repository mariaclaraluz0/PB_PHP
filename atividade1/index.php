<?php
require_once "Controller/produtoController.php";

$produtoController = new produtoController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'produto/telaCadastro':
        $produtoController->telaCadastro();
        break;

    case "produto/salvar":
        $produtoController->cadastrar();
        break;

    case "produto/listar":
        $produtoController->listarprodutos();
        break;

    case "produto/telaEditar":
        $produtoController->telaEditar();
        break;

    case "produto/atualizar":
        $produtoController->atualizar();
        break;

    case "produto/excluir":
        $produtoController->excluir();
        break;
        
    default:
        echo "Página não encontrada";
        break;
}