<?php require_once "../controla_sessao/controla.php"; ?>
<?php

    require_once "../conexao.php";

    if(isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['preco']))
    {

      //inclui arquivo para salvar a foto do upload
      require_once "salvar_foto.php";

    $id =         $_POST["id"];
    $nome =       $_POST["nome"];
    $descricao =  $_POST["descricao"];
    $preco =      $_POST["preco"];
    $foto = $nome_arquivo;  
 

    //string com o comenado sql para ser executado o BD
    $sql = "UPDATE produto SET `nome`= ?, `descricao`= ?, `preco`= ?, `foto`= ? WHERE `idproduto`= ?;";
    

    //prepara o sql para ser executado no banco de dados
   $comando = $conexao->prepare($sql);
 
   //adiciona valores nos parametros
    $comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $id);

   //executa o sql - comando do banco de dados
   $comando->execute();
};
   //abre o arquivo form.php
   header("location: index.php");

   
 