
<?php
        $voto = $_GET['voto'];

        if(!isset($_COOKIE['voto'])){
            setcookie("voto", $voto, time()+(3600*24*31));
            $msg = "Obrigado por votar!  Seu voto foi: " . $voto;
        }
        else{
            $msg = "<p>Você ja votou nessa enquete!</br> <strong> Seu voto foi: " .$_COOKIE['voto'] . " </strong></p>" ;
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <?= $msg ?>
</body>
</html>

