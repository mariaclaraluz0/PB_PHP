<?php

class Livro{
   private $editora;
   private $titulo;
   private $autor;
   private $ano_publicacao; 

   public function __construct($editora, $titulo, $autor, $ano_publicacao){
    $this->editora= $editora;
    $this->titulo= $titulo;
    $this->autor= $autor;
    $this->ano_publicacao= $ano_publicacao;
   }
   public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livro (id, titulo, autor, ano_publicacao) VALUES (:id, :titulo, :autor, :ano_publicacao)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['editora' => $this->editora, 'titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacao' => $this->ano_publicacao]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livro WHERE id = :id");
        $stmt->execute(['id'=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livro SET titulo = :titulo, autor = :autor, ano_publicacao = :ano_publicacao
WHERE id = :id");
        $stmt->execute(['editora' => $editora, 'titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacao' => $this->ano_publicacao ]);
    }

    public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livro WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

}