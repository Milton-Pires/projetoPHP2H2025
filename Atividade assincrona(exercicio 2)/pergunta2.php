<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
session_start();
if ($_POST['resp1'] == "4") { $_SESSION['acertos']++; }
?>



</head>
<body>
    <h3>Pergunta 2:</h3>
    <p>Qual é a capital do Brasil?</p>
    <form action="pergunta3.php" method="post">
        <input type="radio" name="resp2" value="Rio"> Rio de Janeiro <br>
        <input type="radio" name="resp2" value="Brasilia"> Brasília <br>
        <input type="radio" name="resp2" value="SP"> São Paulo <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>