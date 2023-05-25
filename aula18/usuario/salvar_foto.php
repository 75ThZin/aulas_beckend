<?php 

    //var_dump($_FILES);
    //para de excutar o restante do código

    //para nao ficar sem foto
    if(!empty($_FILES['foto']['tmp_name'])){
    $onde_esta = $_FILES['foto']['tmp_name'];
    $nome_arquivo = time() . $_FILES['foto']['name'];
    $para_onde_vai = "../uploads/$nome_arquivo" ;

    move_uploaded_file($onde_esta, $para_onde_vai);
    }
    else{
        $nome_arquivo = "sem_foto.jpg";
    }//final s.f.


?>