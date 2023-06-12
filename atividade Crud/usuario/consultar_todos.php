<?php

    require_once "../conexao.php";

    //string com o comenado sql para ser executado o BD
    $sql = "SELECT * FROM `alunos` ";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);

   //executa o sql - comando do banco de dados
   $comando->execute();

   
   //pegar resultado da consulta
   $resultado = $comando->get_result();

   //cria um vetor vazio
   $aluno = [];

   //pegar todas linhas do resultado
   while($aluno = $resultado->fetch_assoc()){

    //adiciona o usuario (linha do resultado) no vetor
    $alunos[] = $aluno;

   }
