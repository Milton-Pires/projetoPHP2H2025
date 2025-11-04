<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
        if ($_POST['resp8'] == "pacifico") { $_SESSION['acertos']++; }
    ?>

    
</head>
<body>
    <h3>Pergunta 9:</h3>
    <p>Quantos dias tem um ano bissexto?</p>

    <form action="pergunta10.php" method="post">
        <input type="radio" name="resp9" value="364"> 364 <br>
        <input type="radio" name="resp9" value="365"> 365 <br>
        <input type="radio" name="resp9" value="366"> 366 <br>
        <button type="submit">Próxima</button>
    </form>
</body>
</html>