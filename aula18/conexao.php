<?php

$host = "127.0.0.1";

$user = "root";
$password = "";
$database = "db_catalogo_3infoa";
$port = "3306";

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
    