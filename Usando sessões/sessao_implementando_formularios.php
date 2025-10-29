<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        if($_POST){
            session_start();
            $_SESSION['nome'] = $_POST["nome"];
            $_SESSION['senha'] = $_POST["senha"];
            header("location:sessao_formularios.php");

        }
    ?>
</head>
<body>
    <form action="sessao_formularios" name="logar" method="post">
        Nome: <br>
        <input type="text" name="nome" autofocus><br>
        Senha: <br>
        <input type="password" name="senha"> <br>
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>