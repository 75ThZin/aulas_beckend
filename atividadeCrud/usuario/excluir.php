<?php 
    require_once "../conexao.php"; 


    //verifica se o id foi enviado pela url
    if(isset($_GET['codigo']))
    {

        
    //pega o valor do id que foi enviado pela url
    $codigo = $_GET['codigo'];

    //string com o comenado sql para ser executado o BD
    $sql = "DELETE FROM `crud_aluno` WHERE  `codigo`= ?;";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("i",$codigo);

   //executa o sql - comando do banco de dados
   $comando->execute();

   //abre o arquivo form.php
   //header("location: form.php");
    };
    header("location: index.php");
    ?>