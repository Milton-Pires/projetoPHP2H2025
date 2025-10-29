<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
        session_start();

        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];

    ?>
</head>
<body>
    <b>Funcionario:</b> <?php echo $_SESSION['nome'] ?>, logado com sucesso <br>
    <b>Data de conexão:</b> <?php echo date("d/m/y") ?> <br>
    <b>Hora da conexão:</b> <?php echo date("h:i:s") ?> <br>

    <a href="sessoes_verifica_sessao.php">Área do administrador</a>

</body>
</html>