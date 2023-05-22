<?php

    require_once "../conexao.php";

    //verifica se o id foi enviado pela url
    if(isset($_GET['id']))
    {

        
    //pega o valor do id que foi enviado pela url
    $id = $_GET['id'];

    //string com o comenado sql para ser executado o BD
    $sql = "SELECT * FROM `usuario` WHERE  `idusuario`= ?;";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("i",$id);

   //executa o sql - comando do banco de dados
   $comando->execute();

   
  
   
   //pegar resultado da consulta
   $resultado = $comando->get_result();

   //pegar a primeira linha do resultado
   $usuario = $resultado->fetch_assoc();


};