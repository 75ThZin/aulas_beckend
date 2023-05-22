<?php

    require_once "../conexao.php";

    if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha']))
    {
         //inclui arquivo para salvar a foto do upload
         require_once "salvar_foto.php";

    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $foto = $nome_arquivo; 
 
 

    //string com o comenado sql para ser executado o BD
    $sql = "UPDATE usuario SET `nome`= ?, `login`= ?, `senha`= ?, `foto`= ? WHERE `idusuario`= ?;";
    

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("ssssi", $nome, $login, $senha, $foto, $id);

   //executa o sql - comando do banco de dados
   $comando->execute();
};
   //abre o arquivo form.php
   header("location: usuarios.php");

   
 