<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp6'] == "davinci") { $_SESSION['acertos']++; }
    ?>

    
</head>
<body>
    <h3>Pergunta 7:</h3>
    <p>Quanto é 9 dividido por 3?</p>

    <form action="pergunta8.php" method="post">
        <input type="radio" name="resp7" value="2"> 2 <br>
        <input type="radio" name="resp7" value="3"> 3 <br>
        <input type="radio" name="resp7" value="4"> 4 <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>