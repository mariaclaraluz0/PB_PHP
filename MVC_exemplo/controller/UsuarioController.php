<?php
session_start();
require_once "./Model/usuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new usuario($nome, $email);
        $usuario->salvar();
        header('Location:/PB_PHP/MVC_exemplo/usuario/telaCadastro');
        exit;
        }

    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';
    }

    public function telaeditar(){
        $usuario =Usuario::buscar($_GET['id']);
        require 'view/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'],$_POST['email']);
        $usuario->atualizar($_GET['id']);
        header('Location:/PB_PHP/MVC_exemplo/usuario/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Usuario::excluir($_GET['id']);
    
        header('Location:/PB_PHP/MVC_exemplo/usuario/listar');
        exit;
    }
}