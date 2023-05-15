<?php

    require_once "../conexao.php";

    if(isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['preco']))
    {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $foto = "semfoto.png"; 
 

    //string com o comenado sql para ser executado o BD
    $sql = "INSERT INTO `produto` ( `nome`, `descricao`, `preco`, `foto`) 
    VALUES (?, ?, ?, ?);";
    echo $sql;

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("ssds", $nome, $descricao, $preco, $foto);

   //executa o sql - comando do banco de dados
   $comando->execute();
};
   //abre o arquivo form.php
   header("location: produtos.php");
 