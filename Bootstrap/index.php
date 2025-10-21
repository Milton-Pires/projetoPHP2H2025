<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">    
</head>
<body>
    <h1>Cadastro do usuário</h1>

    <form action="#" method="post">

    <label for="primeiroNome">Primeiro Nome</label>
    <input type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro Nome ..." maxlength ="50" required>
    <br>

    <label for="Sobrenome">Sobrenome</label>
    <input type="text" name="Sobrenome" id="Sobrenome" placeholder="Sobrenome ..." maxlength ="50" required>

    <label for="escolhaPets">Escolha seu pet</label>
    <select name="escolhaPets" id="escolha pet">
        <option  value="nenhum">Nenhum</option>
        <option  value="gato">Gato</option>
        <option  value="cachorro">Cachorro</option>
        <option  value="passarinho">Passarinho</option>
        <option  value="peixe">Peixe</option>
    </select>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>