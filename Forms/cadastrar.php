<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

if($nome === "etecia" && $email === "etecia@etecia.com.br"){
    
    echo ("<table> <tr> <td> Usuario cadastrado com Sucesso!!! </td> </tr> </table> ");
    
}else{
    echo ("<b>Usuario ou email invalidos!</b>");
}

?>