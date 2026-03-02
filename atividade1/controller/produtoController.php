<?php
session_start(); 
require_once "./Model/produtoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $dataValidade = $_POST['dataValidade'];


        $produto = new produto($nome, $valor, $quantidade, $dataValidade);
        $produto->salvar();
        //redirecionar depois de salvar
        header('Location: /PB_PHP/atividade01/produto/telaCadastro');
        exit;
    }

    public function listarprodutos(){
        $produtos = produto::listar();
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
        require 'View/produtoListar.php';
    }

    public function telaEditar(){
        $produto = produto::buscar($_GET['id']);
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['dataValidade']);
        $produto->atualizar($_GET['id']);
        header('Location: /PB_PHP/atividade01/produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PB_PHP/atividade01/produto/listar');
        exit;
    }
}