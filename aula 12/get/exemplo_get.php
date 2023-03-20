<?php

$resultado = $_GET["numero1"] + $_GET["numero2"];
echo "O resultado da some é $resultado"
/*
para fazer requisições é usado o $_GET(é usado para pegar arquivos) exemplo
    http://localhost/3%C2%BAinfoA/Thiago/aula%2012/get/exemplo_get.php  "?numero1=10&numero2=20"
    o ? é usado para criar variavel e o & utiliza-se para adicionar mais variaveis

    para fazer a utilização do $_GET

    $resultado = $_GET["numero1"] + $_GET["numero2"];
echo "O resultado da some é $resultado"

*/
?>