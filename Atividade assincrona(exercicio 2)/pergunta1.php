<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
session_start();
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['acertos'] = 0;
?>

</head>
<body>
    <h3>Pergunta 1:</h3>
    <p>Quanto é 2 + 2?</p>

<form action="pergunta2.php" method="post">
    <input type="radio" name="resp1" value="3"> 3 <br>
    <input type="radio" name="resp1" value="4"> 4 <br>
    <input type="radio" name="resp1" value="5"> 5 <br>
    <button type="submit">Próxima</button>
</form>
</body>
</html>