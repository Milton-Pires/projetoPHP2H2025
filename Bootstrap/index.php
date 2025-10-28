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
        <label for="estados">Digite o seu Estado</label>
        <select class="form-select" name="estados" id="escolhaPets">
            <option  value="SP">São Paulo</option>
            <option  value="RJ">Rio de Janeiro</option>
            <option  value="MG">Minas Gerais</option>
            <option  value="BA">Bahia</option>
        </select>
    </div>

    <div class="form-check">
    <label for="" class="form-check-label">Escolha seu PET</label> <br>
    <input type="checkbox" class="form-check-input" name="cachorro"><label for="cachorro" class="form-check-label" >Cachorro</label> <br>
    <input type="checkbox" class="form-check-input" name="peixe"><label for="Peixe" class="form-check-label">Peixe</label> <br>
    <input type="checkbox" class="form-check-input" name="gato"><label for="gato" class="form-check-label">Gato</label> <br>
    <input type="checkbox" class="form-check-input" name="passariho"><label for="passarinho" class="form-check-label">Passarinho</label> <br>   
    
    <div class="form-check form-switch">
        <label for="estado_civil" value="estado_civil">Estado Civil</label> <br>
        <input  type="radio" > 
        <label for="Solteiro" value="Solteiro">Solteiro</label> <br>
        <input  type="radio">
        <label for="Casado" value="Casado">Casado</label>
    </div>
    <div>
        <h6>
           Mensagem: 
        </h6>
        <br>
        <textarea name="msg" cols="50" rows="8">
            
        </textarea>
    </div>

    

    <div class="md-3">
        <button  class="btn btn-primary"  id="enviar"type="submit">Enviar</button>
        <br>
        <button class="btn btn-primary" id="limpar"type="reset">Limpar</button>
    </div>

    <div>
        <input type="hidden" value="user" value="admin">
        <input type="hidden" value="nivel" value="2">
    </div>

    

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>