<?php
$Aluno1 = array(
    "nome" => "Poliana Silveira",
    "nota1" => "7",
    "nota2" => "9"
);
$Aluno2 = array(
    "nome" => "Murilo Alexandre",
    "nota1" => "8",
    "nota2" => "5"
);
$Aluno3 = array(
    "nome" => "Andre Felipe",
    "nota1" => "6",
    "nota2" => "7"
);

$Aluno4 = array(
    "nome" => "Lavinia Sandy",
    "nota1" => "6",
    "nota2" => "7"
);

$dados = [$Aluno1, $Aluno2, $Aluno3, $Aluno4];

//print_r($dados);
echo json_encode($dados);


?>