<?php
session_start();
require_once "./Model/livroModel.php";

class livroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
      $id= $_POST ['id'];
      $titulo= $_POST['titulo'];
      $autor=$_POST['autor'];
      $ano_publicacao= $_POST['ano_publicacao'];

        $livro = new livro($id, $titulo, $autor, $ano_publicacao);
        $livro->salvar();
        header('Location:/PB_PHP/atividade_avaliativa/livro/telaCadastro');
        exit;
    }

    public function listarLivro(){
        $livro = Livro::listar();
        echo "<pre>";
        print_r($livro);
        echo "</pre>";
        require 'View/livroListar.php';
    }

    public function telaeditar(){
       $livro= Livro :: buscar ($_GET['id']);
        require 'view/livroEditar.php';
    }

    public function atualizar(){
    $livro = new livro($_POST['id'],$_POST['titulo'],$_POST['autor'],$_POST['ano_publicacao']);
        $livro->atualizar($_GET['id']);
        header('Location:/PB_PHP/atividade_avaliativa/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
    
        header('Location:/PB_PHP/aividade_avaliativa/livro/listar');
        exit;
    }
}