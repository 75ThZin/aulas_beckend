<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$password = "";
$database = "db_catalogo_3infoA";

//faz a conexao
$conexao = new mysqli($host, 
                      $user, 
                      $password, 
                      $database, 
                      $port);

//Verifica se a conexao foi bem sucedida
    if($conexao->connect_error){
        echo "foi encontrado o erro :" . $conexao->connect_error;
        die();
    }
    