<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();
        if ($_POST['resp7'] == "3") { $_SESSION['acertos']++; }
    ?>

    
</head>
<body>
    <h3>Pergunta 8:</h3>
    <p>Qual é o maior oceano do mundo?</p>

    <form action="pergunta9.php" method="post">
        <input type="radio" name="resp8" value="atlantico"> Atlântico <br>
        <input type="radio" name="resp8" value="pacifico"> Pacífico <br>
        <input type="radio" name="resp8" value="indico"> Índico <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>