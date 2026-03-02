<?php

class produto{
    private $nome;
    private $valordavenda;
    private $quantidadedisponivel;
    private $datavalidade;

    public function __construct($nome, $valordavenda, $quantidadedisponivel, $datavalidade ){
        $this->nome= $nome;
        $this->valordavenda= $valordavenda;
        $this->quantidadedisponivel= $quantidadedisponivel;
        $this->datavalidade= $datavalidade;
    }

    public function salvar(){
        if(!isset($_SESSION['produto'])){
            $_SESSION['produto']=[];
        }
        $_SESSION['produto'][]=[
            'nome'=>$this->nome,
            'valordavenda' =>$this->valordavenda,
            'quantidadedisponivel' =>$this->quantidadedisponivel,
            'datavalidade'=>$this->datavalidade
        ];
    }
    public static function listar(){
        return $_SESSION['produto']??[];
    }
}