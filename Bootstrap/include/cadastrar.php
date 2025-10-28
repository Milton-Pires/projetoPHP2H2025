<?php

    /*
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
    } */


    /*
    if(isset($_POST['cachorro'])){
        echo "Você escolheu cachorro! " . $_POST['cachorro'];
        echo "</br>";
    }
    if(isset($_POST['gato'])){
        echo "Você escolheu gato!". $_POST['gato'];
        echo "</br>";
    }
    if(isset($_POST['peixe'])){
        echo "Você escolheu peixe " . $_POST['peixe'];
        echo "</br>";
    }
    if(isset($_POST['passarinho'])){
        echo "Você escolheu passarinho" . $_POST['passarinho'];
        echo "</br>";
    }

    if(isset($_POST['estado_civil'])){
        echo "Você está " . $_POST['estado_civil'];
        echo "</br>";
    }
    */

    if(isset($_POST['estados'])){
        echo "Você é do estado de " . $_POST['estados'];
    }

?>