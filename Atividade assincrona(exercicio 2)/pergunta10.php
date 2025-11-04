<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        session_start();
        if ($_POST['resp9'] == "366") { $_SESSION['acertos']++; }
    ?>

    
</head>
<body>
    <h3>Pergunta 10:</h3>
    <p>Qual desses números é primo?</p>

    <form action="resultado.php" method="post">
        <input type="radio" name="resp10" value="6"> 6 <br>
        <input type="radio" name="resp10" value="9"> 9 <br>
        <input type="radio" name="resp10" value="7"> 7 <br>
        <button type="submit">Ver Resultado</button>
    </form>
</body>
</html>