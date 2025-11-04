<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastro do usuário 1</h1>
<main>
    <form action="pagina2.php" method="post">
        <div class="md-3">
        <label for="primeiroNome">Nome</label>
        <input  class="form-control"type="text" name="nome" id="nome" placeholder="Digite seu Nome..." maxlength ="50" required autofocus autocomplete="off">
        </div>

        <div class="md-3">
        <label for="primeiroNome">Idade</label>
        <input  class="form-control"type="text" name="idade" id="idade" placeholder="Digite sua Idade..." maxlength ="50" required autocomplete="off">
        </div>

        <div class="md-3">
        <label for="primeiroNome">Peso</label>
        <input  class="form-control"type="text" name="peso" id="peso" placeholder="Digite seu Peso..." maxlength ="50" required autocomplete="off">
        </div>

        <div class="md-3">
        <label for="primeiroNome">Altura</label>
        <input  class="form-control"type="text" name="altura" id="altura" placeholder="Digite sua altura..." maxlength ="50" required autocomplete="off">
        </div>

        <div class="md-3">
        <button  class="btn btn-primary"  id="enviar"type="submit">Enviar</button>
        <br>
        <button class="btn btn-primary" id="limpar"type="reset">Limpar</button>
    </div>
    </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>