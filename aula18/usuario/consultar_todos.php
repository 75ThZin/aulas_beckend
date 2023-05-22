<?php

    require_once "../conexao.php";

    //string com o comenado sql para ser executado o BD
    $sql = "SELECT * FROM `usuario` ";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //executa o sql - comando do banco de dados
   $comando->execute();

   
   //pegar resultado da consulta
   $resultado = $comando->get_result();

   //cria um vetor vazio
   $usuarios = [];

   //pegar todas linhas do resultado
   while($usuario = $resultado->fetch_assoc()){

    //adiciona o usuario (linha do resultado) no vetor
    $usuarios[] = $usuario;

   }
