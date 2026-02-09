<?php

session_start()

class aluno {
    private $nome;
    private $sobrenome;
    private $nota;
    private $dataNascimento;

    public function __construct($nome, $sobrenome, $nota, $dataNascimento){
        $this->nome= $nome;
        $this->sobrenome= $nome;
        $this->nota= $nota;
        $this->dataNascimento= $dataNascimento;
    }
    public function salvar(){
        if(!isset($_SESSION['alunos'])){
            $_SESSION['alunos']=[];
        }
         $_SESSION['alunos'][]=[
        'nome'=>$this->nome,
        'sobrenome'=>$this->sobrenome,
        'nota'=>$this->nota,
        'dataNascimento'=>$this->dataNascimento,
         ];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>cadastro de alunos</title>
    </head>
    <body>
        <form method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Sobrenome:</label>
    <input type="text" name="sobrenome" required>

    <label>Nota:</label>
    <input type="number" name="nota" step="0.01" required>

    <label>Data de Nascimento:</label>
    <input type="date" name="dataNascimento" required>

    <br><br>

    <button type="submit" name="salvar">Salvar</button>
    <button type="submit" name="limpar">Limpar</button>
    <button type="submit" name="destruir">Destruir Session</button>
</form>

<?php
    $somaNotas = 0;
    foreach ($_SESSION['alunos'] as $aluno):
        $idade = Aluno::calcularIdade($aluno['dataNascimento']);
        $somaNotas += $aluno['nota'];
    ?>
