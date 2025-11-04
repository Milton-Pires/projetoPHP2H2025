<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp2'] == "Brasilia") { $_SESSION['acertos']++; }
    ?>


</head>
<body>
    <h3>Pergunta 3:</h3>
    <p>Qual é o resultado de 5 * 3?</p>

    <form action="pergunta4.php" method="post">
        <input type="radio" name="resp3" value="10"> 10 <br>
        <input type="radio" name="resp3" value="15"> 15 <br>
        <input type="radio" name="resp3" value="20"> 20 <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>