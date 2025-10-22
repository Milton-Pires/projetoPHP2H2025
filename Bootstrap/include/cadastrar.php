<?php


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $primeiroNome = $_POST['primeiroNome'];
        $sobrenome = $_POST['Sobrenome'];
        $escolhaPets = $_POST['escolhaPets'];

        echo("$primeiroNome - $sobrenome - $escolhaPets <br>");
    
        echo '<a href="../index.php">Voltar </a>';

        //header("location: ../index.php") 
        //FUNÇÃO DE REDIRECIONAMENTO!!
    }
    else{
        echo "Olá";
    }

    
?>