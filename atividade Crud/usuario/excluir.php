<?php require_once "../controla_sessao/controla.php"; ?>
<?php 

    require_once "../conexao.php"; 


    //verifica se o id foi enviado pela url
    if(isset($_GET['id']))
    {

        
    //pega o valor do id que foi enviado pela url
    $id = $_GET['id'];

    //string com o comenado sql para ser executado o BD
    $sql = "DELETE FROM `alunos` WHERE  `codigo`= ?;";

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("i",$id);

   //executa o sql - comando do banco de dados
   $comando->execute();

   //abre o arquivo form.php
   //header("location: form.php");
    };
    header("location: index.php");
    ?>