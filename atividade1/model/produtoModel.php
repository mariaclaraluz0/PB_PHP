<?php
class Produto{
    private $nome;
    private $valor;
    private $quantidade;
    private $dataValidade;

    public function __construct($nome, $valor, $quantidade, $dataValidade){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->dataValidade = $dataValidade;
    }

    public function salvar(){
        if(!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] =[
            'nome' =>$this->nome,
            'valor' =>$this->valor,
            'quantidade' =>$this->quantidade,
            'dataValidade' =>$this->dataValidade
        ];
    }

    public static function listar(){
        return $_SESSION['produtos'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['produtos'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['produtos'][$id])){ 
            $_SESSION['produtos'][$id]=[ 
                'nome' => $this->nome,
                'valor' => $this->valor,
                'quantidade' => $this->quantidade,
                'dataValidade' => $this->dataValidade
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['produtos'][$id])){ 
            unset($_SESSION['produtos'][$id]); 
        }
    }
}