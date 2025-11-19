<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote aqui!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h3>Votação</h3>
        <form action="voto.php" method="get">
            <div class="form-check">

                <label for="" class="form-check-label">Escolha o melhor time (na sua opinião)</label> <br>
                <input type="radio"  name="voto" value="São Paulo"><label>São-Paulo</label> <br>
                <input type="radio"  name="voto" value="Santos"><label>Santos</label> <br>
                <input type="radio"  name="voto" value="Palmeiras"><label>Palmeiras</label> <br>
                <input type="radio"  name="voto" value="Corinthians"><label>Corinthians</label> 
        
                <br>
            </div>

            <div class="md-3">
                <button  class="btn btn-primary"  id="enviar"type="submit">Enviar</button>
             </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>