<?php
session_start();

class Aluno{
    private $nome;
    private $sobrenome;
    private $nota;
    private $dataNascimento;

    public function __construct($nome, $sobrenome, $nota, $dataNascimento){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nota = $nota;
        $this->dataNascimento = $dataNascimento;
    }

    public function salvar(){
        if(!isset($_SESSION['alunos'])){
            $_SESSION['alunos'] = [];
        }

        $_SESSION['alunos'][] = [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'nota' => $this->nota,
            'dataNascimento' => $this->dataNascimento,
            'idade' => $this->calcularIdade()
        ];
    }

        private function calcularIdade(){
        $dataNasc = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($dataNasc);
        return $idade->y;
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nota = $_POST['nota'] ?? 0;
    $dataNascimento = $_POST['dataNascimento'];

    if(!empty($nome) && !empty($dataNascimento)){
        $aluno = new Aluno($nome, $sobrenome, $nota, $dataNascimento);
        $aluno->salvar();
}

}

$media = 0;
if (!empty($_SESSION['alunos'])) {
    $totalNotas = 0;
    foreach ($_SESSION['alunos'] as $aluno) {
        $totalNotas += $aluno['nota'];
    }
    $media = $totalNotas / count($_SESSION['alunos']);
}

if(isset($_GET['reset'])){
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
    </head>
    <body >
        <h2> Cadastro de Alunos </h2>
        <form action="" method="POST">
            Nome: 
            <input type="text" name="nome" value=""> <br>
            Sobrenome: 
            <input type="text" name="sobrenome" value=""> <br>
            Nota: 
            <input type="number" name="nota" min="0" max="10"> <br>
            Data Nascimento:
            <input type="date" name="dataNascimento"> <br>
            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>
        </form>
        <?php if(isset($_SESSION['alunos'])): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nota</th>
                    <th>Data Nascimento</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['alunos'] as $aluno): ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['sobrenome'] ?></td>
                        <td><?= $aluno['nota'] ?></td>
                        <td><?= $aluno['dataNascimento'] ?></td>
                        <td><?= $aluno['idade'] ?></td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>

<?php echo "Média dos Alunos: " . number_format($media,2); ?>