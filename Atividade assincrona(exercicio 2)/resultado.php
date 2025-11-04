<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
session_start();
if ($_POST['resp10'] == "7") { $_SESSION['acertos']++; }

$nome = $_SESSION['nome'];
$acertos = $_SESSION['acertos'];

echo "<h2>Resultado Final</h2>";
echo "<p>Participante: $nome</p>";
echo "<p>Acertos: $acertos de 10</p>";

if ($acertos >= 8) {
    echo "<p>Excelente!</p>";
} else if ($acertos >= 5) {
    echo "<p>Bom desempenho!</p>";
} else {
    echo "<p>Precisa praticar mais!</p>";
}
?>

<?php
session_unset();
session_destroy();
?>
</head>
<body>
    <form action="inicio.php" method="post">
        <button type="submit">Reiniciar Quiz</button>
    </form>
</body>
</html>