<?php
    session_start();

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if($login == "admin" && $senha == "1234"){
        $_SESSION["usuario"] = "Administrador";
        header("Location: admin.php");
    }
    else if ($login =="visit" && $senha == "12345"){
        $_SESSION["usuario"] = "Visitante";
        header("Location: visit.php");
    }
    else if($login == "colab" && $senha == "123456"){
        $_SESSION["usuario"] = "Colaborador";
        header("Location: colab.php");
    }
    else{
        $_SESSION["erro"] = "Login ou senha incorretos";
        header("Location: index.php");
    }
    

?>