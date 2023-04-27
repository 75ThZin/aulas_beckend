<?php

    require_once "../conexao.php";

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    //string com o comenado sql para ser executado o BD
    $sql = "INSERT INTO `produto` ( `nome`, `descricao`, `preco`, `foto`) 
    VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
    echo $sql;

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->multi_query($sql);
 
   //adiciona valores nos parametros
    //$comando->bind_param("ssds", "a", "b", 1, "c");

   //executa o sql - comando do banco de dados
   //$comando->execute();

   //abre o arquivo form.php
   //header("location: form.php");
   