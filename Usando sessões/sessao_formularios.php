<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();
    ?>
</head>
<body>
    <b>Funcionario:</b> <?php echo $_SESSION['nome'] ?>, logado com sucesso <br>
    <b>Data de conexão:</b> <?php echo date("d/m/y") ?> <br>
    <b>Hora da conexão:</b> <?php echo date("h:i:s") ?> <br>

    <a href="sessao_formularios_valida.php">Área do administrador</a>
</body>
</html>