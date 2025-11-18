<?php
        $voto = $_GET['voto'];

        if(isset($_COOKIE['voto'])){
            setcookie("voto", $voto, time()+ (3600*24*31));
            $msg = "Obrigado por votar! Seu voto foi: " . $voto;
        }
        else{
            $msg = "Você ja votou nessa enquete!";
        }
        echo $msg;

    ?>