<?php
$alunos= [
    ["nome" => "Muriel" , "nota" => 10],
    ["nome" => "João" , "nota" => 8],
    ["nome" => "Pedro" , "nota" => 5],
    ["nome" => "Thales" , "nota" => 3],
    ["nome" => "Rodrigo" , "nota" => 7],
    ["nome" => "Bruna" , "nota" => 6],
    ["nome" => "Camila" , "nota" => 10],
    ["nome" => "Victor" , "nota" => 9],
    ["nome" => "Raphael" , "nota" => 2],
    ["nome" => "Manuela" , "nota" => 10],
];
$somaNotas = 0;
$maiorNota = 0;
$alunoMaiorNota = "";

foreach($alunos as $aluno){
    $somaNotas += $aluno["nota"];
    if ($aluno["nota"] > $maiorNota){
        $maiorNota = $aluno["nota"];
        $alunoMaiorNota = $aluno["nome"];
    }

}

$media = $somaNotas / 10;

echo("A média dos alunos é $media <br />");
echo("O aluno com a maior média é $alunoMaiorNota");



?>