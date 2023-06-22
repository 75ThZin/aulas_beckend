<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>

    <div class="container">

    <h1>Cadastro de Aluno</h1>
    <hr>
    
    <form 
    action="<?php echo isset($aluno) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

    <input type="hidden" name="codigo" id="codigo" value="<?php echo $aluno['codigo'] ??""; ?>">


    <label for="nome" class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $aluno['nome'] ??""; ?>"><br>

    <label for="RA" class="form-label">RA</label><br>
    <input class="form-control" type="number" name="RA" id="RA" value="<?php echo $aluno['RA'] ?? ""; ?>"><br>
    
    <label for="sexo" class="form-label">sexo</label><br>
    <input class="form-control" type='text' name="sexo" id="sexo" value="<?php echo $aluno['sexo'] ?? ""; ?>"><br>

    <label for="idade" class="form-label">Idade</label><br>
    <input class="form-control" type="number" name="idade" id="idade" value="<?php echo $aluno['idade'] ?? ""; ?>"><br>

    <label for="polo" class="form-label">Polo</label><br>
    <input class="form-control" type="text" name="polo" id="polo" value="<?php echo $aluno['polo'] ?? ""; ?>"><br>


    <button type="submit" class="btn btn-dark">Cadastrar</button><br>


    </form>
</div>

    <?php require_once "../template/rodape.php"; ?>