<?php
       require_once "../conexao.php";

   
    $nome = $_POST["nome"];
    $RA = $_POST["RA"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $polo = $_POST["polo"];
 

    //string com o comenado sql para ser executado o BD
    $sql = "INSERT INTO `crud_aluno` ( `nome`, `RA`,`idade`, `sexo`,  `polo`) 
    VALUES (?, ?, ?, ?, ?);";
    echo $sql;

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("siiss", $nome, $RA, $idade, $sexo, $polo);

   //executa o sql - comando do banco de dados
   $comando->execute();

   //abre o arquivo form.php
   header("location: index.php");
 