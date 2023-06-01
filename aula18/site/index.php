<?php   include_once "../template/cabecalho.php";
        include_once "../template/menu.php"; 
        include_once "../produto/consultar_todos.php"; ?>






<hr>


<!--Lista de produtos -->
    <div class="container">
        <div class="row row-cols-4 gutter-2">

          <?php
          foreach($produtos as $key => $produto):?>
            <div class="col">
            <div class="card">
                <img src="../uploads/<?php echo $produto["foto"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produto["nome"]; ?></h5>
                
                <a href="#" class="btn btn-primary">Ver Produto</a>
                </div>
            </div>
            </div>

          <?php endforeach; ?>

        </div>
    </div>

<!--Final da lista de produtos -->

<hr>

<?php   include_once "../template/rodape.php";   ?>