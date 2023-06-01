<?php 
//sempre que for trabalhar com sesões é necessário
//iniciar a sessão
session_start();

//verifica se existe a variável de sessão chamada usuário
if(!isset($_SESSION['usuario'])){
    header("location: ../controla_sessao/form_login.php");
}

?>