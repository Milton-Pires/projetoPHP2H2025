<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp5'] == "marte") { $_SESSION['acertos']++; }
    ?>

    
</head>
<body>
    <h3>Pergunta 6:</h3>
    <p>Quem pintou a Mona Lisa?</p>

    <form action="pergunta7.php" method="post">
        <input type="radio" name="resp6" value="picasso"> Picasso <br>
        <input type="radio" name="resp6" value="davinci"> Leonardo da Vinci <br>
        <input type="radio" name="resp6" value="vangogh"> Van Gogh <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>