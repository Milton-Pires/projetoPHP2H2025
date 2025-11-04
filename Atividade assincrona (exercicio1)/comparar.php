<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparacao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <?php
        session_start();

        $nome1 = $_SESSION["nome"];
        $idade1 = $_SESSION["idade"];
        $peso1 = $_SESSION["peso"];
        $altura1= $_SESSION["altura"];

        $nome2 = $_POST["nome2"];
        $idade2 = $_POST["idade2"];
        $peso2 = $_POST["peso2"];
        $altura2 = $_POST["altura2"];

        if($altura1 == $altura2){
            echo ("Os usuarios possuem as mesmas alturas! </br>");
        }
        elseif($altura1 > $altura2){
            echo ("O(A) $nome1 é mais alto que o(a) $nome2 </br>");
        }
        else{
            echo ("O(A) $nome2 é mais alto que o(a) $nome1 </br>");
        }

        if($idade1 == $idade2){
            echo("Os usuarios possuem a mesma idade! </br>");
        }
        else if ($idade1 > $idade2){
            echo("O(A) $nome1 é mais velho(a) que $nome2 </br>");
        }
        else{
            echo("O(A) $nome2 é mais velho(a) que $nome1 </br>");
        }

        if($peso1 == $peso2){
           echo("Os usarios possuem o mesmo peso! </br>"); 
        }
        else if($peso1 > $peso2){
            echo("O(A) $nome1 é mais pesado que $nome2 </br>");
        }
        else{
            echo("O(A) $nome2 é mais pesado que $nome1 </br>");
        }


    ?>
</head>
<body>
    
</body>
</html>