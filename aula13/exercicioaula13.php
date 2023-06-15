<?php

if(isset($_GET["numero"]) && isset($_GET["n2"])){
    $r = $_GET["numero"] + $_GET["n2"];
    echo $r;
}
else{
   // echo "Você precisa informar os valores para somar";
   // header faz um redirecionamento;
   header("location: exercicios_aula13.html");
}

?>