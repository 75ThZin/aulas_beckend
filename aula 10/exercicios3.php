<h2>Exercicios 3</h2>



<?php

$Aluno1 = [
    "nome" => "Poliana",
    "nota1" => "7",
    "nota2" => "9"
];
$Aluno2 = [
    "nome" => "Murilo",
    "nota1" => "8",
    "nota2" => "5"
];
$Aluno3 = [
    "nome" => "Andre",
    "nota1" => "6",
    "nota2" => "7"
];

$boletin = [$Aluno1, $Aluno2, $Aluno3];

     for($a=0; $a<=2; $a++){
         foreach($boletin[$a] as $key => $value){
        echo $value . " | ";
     }  echo "<br>";
     }

    

        

?>