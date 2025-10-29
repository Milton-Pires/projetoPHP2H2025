<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        
        //$_SESSION['nome'] = "Administrador";
        
        //elimina todas as variaveis da seção, mas mantém a sessão ativa
        //session_unset();

        //Elimina toda a sessão
        //session_destroy();

        //Recupera a sessão pelo ID
    ?>

    <h3>Sessão com Usuario</h3>

    Bem vindo, Sr. <?php //echo $_SESSION['nome']; ?> <br>

    SID desta sessão é: <?php echo session_id(); ?> 

</body>
</html>