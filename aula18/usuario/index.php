<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>



  
    <div class="counteiner">
        <h1>Usuários</h1>
        <hr>
    </div>

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Usuários <i class="fa-solid fa-plus"></i></a>
    </div>

    <table class="table" id ="#myTable">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">login</th>
      <th scope="col">Foto</th>
      <th scope="col" width="15%">Ações</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($usuarios as $usuario){?>
    <tr>
      <th scope="row"><?php echo $usuario['nome']; ?></th>
      <td><?php echo $usuario['login']; ?></td>
      <td>
        <img 
        src="../uploads/<?php echo $usuario['foto']; ?>" 
        height="30px" alt="" >
      </td>
      
      <td>
        <td class="text-end">
        <a href="excluir.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>  Excluir</a>
        <a href="form.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>  Atualizar</a>
      </td>
      </td>
    </tr>
    <?php }?>
    
    

  </tbody>
</table>

<?php require_once "../template/rodape.php"; ?>
    