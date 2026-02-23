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
}