
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média (Aprovação a partir de média 6)</h2>
    <form method="post" action="">
        <label for="nota1">Nome do Aluno:</label>
        <input type="text" name="aluno" id="aluno" required><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php

    $aluno = $_POST['aluno'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'])/3;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ($media >= 7) ? $mensagem = "Parabéns!. Você está aprovado!!!" : $mensagem = "Infelizmente você foi reprovado!!!.";
    }

    echo "Olá " . $_POST['aluno'] . ". A média das suas notas é " . $media . ". " . $mensagem;

    ?>
</body>
</html>