<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>


    <div class="counteiner">
        <h1>Alunos</h1>
        <hr>
    </div>

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Alunos<i class="fa-solid fa-plus"></i></a>
    </div>

    <table class="table" id ="#myTable">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">RA</th>
      <th scope="col">idade</th>
      <th scope="col">Sexo</th>
      <th scope="col">polo</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($alunos as $aluno){?>
    <tr>
      <td><?php echo $aluno['codigo']; ?></td>
      <td><?php echo $aluno['nome']; ?></td>
      <td><?php echo $aluno['RA']; ?></td>
      <td><?php echo $aluno['idade']; ?></td>
      <td><?php echo $aluno['sexo']; ?></td>
      <td><?php echo $aluno['polo']; ?></td>
      
      <td>
        <td class="text-end">
        <a href="excluir.php?codigo=<?php echo $aluno['codigo']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
        <a href="form.php?codigo=<?php echo $aluno['codigo']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
      </td>
    </tr>
    <?php }?>
    
    

  </tbody>
</table>

<?php require_once "../template/rodape.php"; ?>
    