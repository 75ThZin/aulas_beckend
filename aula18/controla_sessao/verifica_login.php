<?php

//verifica se foi enviado os dados de usuarui e senha
//do formularui de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    require_once "../conexao.php";

    
    //string com o comenado sql para ser executado o BD
    $sql = "SELECT * FROM `usuario` WHERE  `login`= ?;";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("s",$usuario);

   //executa o sql - comando do banco de dados
   $comando->execute();

   //pegar resultado da consulta
   $resultado = $comando->get_result();

   //pegar a primeira linha do resultado
   $usuario = $resultado->fetch_assoc();

   if($usuario){
    
    if(password_verify($senha, $usuario['senha'])){
        //inicia a sessao
        session_start();
        //cria a variavel de sessao
        $_SESSION['usuario'] = $usuario;
        //redireciona para produtos
        header("location: ../produto/index.php");
        

    }else{
        echo "senha incorreta";
    }
}else{
    echo "não existe usuário com o login informado";
}

}


?>
