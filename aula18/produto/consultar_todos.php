<?php

    require_once "../conexao.php";

    //string com o comenado sql para ser executado o BD
    $sql = "SELECT * FROM `produto` ";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //executa o sql - comando do banco de dados
   $comando->execute();

   
   //pegar resultado da consulta
   $resultado = $comando->get_result();

   //cria um vetor vazio
    $produtos = [];

   //pegar todas linhas do resultado
   while($produto = $resultado->fetch_assoc()){

    //adiciona o produto (linha do resultado) no vetor
    $produtos[] = $produto;

   }
