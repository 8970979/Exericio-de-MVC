<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Aluno</title>
</head>
<body>
    <div class="caixa">
        <h1>Cadastro do Aluno</h1>

        <form action="controller.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome" required>
            <br><br>
            <label for="nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" step="0.1" min="0" max="10" required>
            <br><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" step="0.1" min="0" max="10" required>
            <br><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" step="0.1" min="0" max="10" required>
            <br><br>
            <label for="faltas">Faltas:</label>
            <input type="number" id="faltas" name="faltas" min="0" max="80" required>
            <br><br>
            <input type="submit" value="Cadastrar Aluno" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            <br><br>
        </form>
    </div>
</body>
</html>
