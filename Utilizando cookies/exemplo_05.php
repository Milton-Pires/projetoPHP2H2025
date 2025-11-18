<?php
    $value = "aluno";

    setcookie("Ocupacao", $value);
    //Expira no final da sessão (Quando o browser fechar);

    setcookie("Ocupacao" , $value, time()+60);
    //Expira em 1 min