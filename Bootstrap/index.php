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
   
    <main class="container">
         <h1>Cadastro do usuário</h1>
        <form action="include/cadastrar.php" method="post">
        <div class="md-3">
        <label for="primeiroNome">Primeiro Nome</label>
        <input  class="form-control"type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro Nome..." maxlength ="50" required autofocus autocomplete="off">
        </div>  

        <div class="md-3">
        <label for="Sobrenome">Sobrenome</label>
        <input class="form-control" type="text" name="Sobrenome" id="Sobrenome" placeholder="Sobrenome..." maxlength ="50" required autocomplete="off">
        </div>

        <div class="md-3">
        <label for="escolhaPets">Escolha seu pet</label>
        <select class="form-select" name="escolhaPets" id="escolhaPets">
            <option  value="nenhum">Nenhum</option>
            <option  value="gato">Gato</option>
            <option  value="cachorro">Cachorro</option>
            <option  value="passarinho">Passarinho</option>
            <option  value="peixe">Peixe</option>
        </select>
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