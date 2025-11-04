<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <?php
        session_start();
    ?>


</head>
<body>
    <h1>Bem vindo ao quiz!</h1>
<main>
    <form action="pergunta1.php" method="post">
        <div class="md-3">
        <label for="primeiroNome">Nome:</label>
        <input  class="form-control"type="text" name="nome" id="nome" placeholder="Digite seu Nome..." maxlength ="50" required autofocus autocomplete="off">
        </div>

        <button  class="btn btn-primary"  id="comecar"type="submit">Começar</button>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>