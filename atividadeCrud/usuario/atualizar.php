<?php
   require_once "../conexao.php";

       
    $codigo = $_POST['codigo'];
    $nome = $_POST["nome"];
    $RA = $_POST["RA"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $polo = $_POST["polo"]; 
 
 

    //string com o comenado sql para ser executado o BD
    $sql = "UPDATE crud_aluno SET `nome`= ?, `RA`= ?, `idade`= ?, `sexo`= ?, `polo`= ? WHERE `codigo`= ?;";
    

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("siissi", $nome, $RA,  $idade, $sexo, $polo, $codigo);

   //executa o sql - comando do banco de dados
   $comando->execute();
   //abre o arquivo form.php
   header("location: index.php");

   
 