<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
        $voto = $_GET['voto'];

        if(!isset($_COOKIE['voto'])){
            setcookie("voto", $voto, time()+ (3600*24*31));
            $msg = "Obrigado por votar! Seu voto foi: " . $voto;
        }
        else{
            $msg = "<p>Você ja votou nessa enquete! Seu voto foi: " .$_COOKIE['voto'] . "</p>" ;
        }
        echo $msg;

    ?>
<body>
    
</body>
</html>

