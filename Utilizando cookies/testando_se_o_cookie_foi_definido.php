<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando se o cookie foi definido</title>
</head>
<body>
    <?php
        if(issset($_COOKIE['usuario'])){
            echo "Bem-Vindo" . $_COOKIE['usuario'] . "! </br>";
        }
        else{
            echo "Usuário novo!, seja bem-vindo </br>";
        }
    ?>

</body>
</html>