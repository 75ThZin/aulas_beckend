<?php require_once "../controla_sessao/controla.php"; ?>
<?php

    require_once "../conexao.php";

    if(isset($_POST['nome']) && isset($_POST['RA']))
    {
         
    $codigo = $_POST['codigo'];
    $nome = $_POST["nome"];
    $RA = $_POST["RA"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["iade"]; 
 
 

    //string com o comenado sql para ser executado o BD
    $sql = "UPDATE alunos SET `nome`= ?, `RA`= ?, `sexo`= ?, `idade`= ? WHERE `codigo`= ?;";
    

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("ssssi", $nome, $RA, $sexo, $idade, $codigo);

   //executa o sql - comando do banco de dados
   $comando->execute();
};
   //abre o arquivo form.php
   header("location: index.php");

   
 