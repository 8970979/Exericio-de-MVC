<?php
session_start();


if (!isset($_SESSION['aluno'])) {
    header('Location: View.html');
    exit;
}


$aluno = $_SESSION['aluno'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Aluno</title>
</head>
<body>

    <h1>Dados do Aluno</h1>

    <p>Nome: <?php echo $aluno['nome']; ?></p>
    <p>Nota 1: <?php echo $aluno['nota1']; ?></p>
    <p>Nota 2: <?php echo $aluno['nota2']; ?></p>
    <p>Nota 3: <?php echo $aluno['nota3']; ?></p>
    <p>Faltas: <?php echo $aluno['faltas']; ?></p>
    <p>Média: <?php echo $aluno['media']; ?></p>
    <p>Presença: <?php echo $aluno['presenca']; ?>%</p>
    <p>Porcentagem de Faltas: <?php echo $aluno['porcentagem_faltas']; ?>%</p>
    <p>Resultado Final: <?php echo $aluno['situacao']; ?></p>

    <br>
    <a href="View.html">Voltar para o formulário</a>

</body>
</html>
