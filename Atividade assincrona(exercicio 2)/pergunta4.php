<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp3'] == "15") { $_SESSION['acertos']++; }
    ?>


</head>
<body>
    <h3>Pergunta 4:</h3>
    <p>Qual desses animais é um mamífero?</p>

    <form action="pergunta5.php" method="post">
        <input type="radio" name="resp4" value="tubarao"> Tubarão <br>
        <input type="radio" name="resp4" value="golfinho"> Golfinho <br>
        <input type="radio" name="resp4" value="crocodilo"> Crocodilo <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>