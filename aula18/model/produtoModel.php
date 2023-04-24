<?php

    require_once "../conexao.php";

    //string com o comenado sql para ser executado o BD
    $sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`,`foto`) 
    VALUES (?, ?, ?, ?);";


    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("ssds", "a", "b", 1, "c");

   //executa o sql - comando do banco de dados
   $comando->execute();