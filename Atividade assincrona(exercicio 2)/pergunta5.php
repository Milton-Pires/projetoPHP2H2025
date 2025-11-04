<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp4'] == "golfinho") { $_SESSION['acertos']++; }
    ?>


</head>
<body>
    <h3>Pergunta 5:</h3>
    <p>Qual planeta é conhecido como o “Planeta Vermelho”?</p>

    <form action="pergunta6.php" method="post">
        <input type="radio" name="resp5" value="marte"> Marte <br>
        <input type="radio" name="resp5" value="jupiter"> Júpiter <br>
        <input type="radio" name="resp5" value="venus"> Vênus <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>