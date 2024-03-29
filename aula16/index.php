<?php
  include_once "dados.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

<!--carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/foto1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/foto2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/foto3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Final carousel -->

<!--Menu -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lojinha da Selma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      <?php
      $categorias =[];
      foreach($produtos as $key => $value): 
      if(!in_array($value["categoria"], $categorias)):
        $categorias[] = $value["categoria"];
      ?>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $value["categoria"]; ?></a>
        </li>
      
      
      <?php 
      endif;
      endforeach; ?>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--Final Menu -->


<hr>


<!--Lista de produtos -->
    <div class="container">
        <div class="row row-cols-4 gutter-2">

          <?php
          foreach($produtos as $key => $produto):?>
            <div class="col">
            <div class="card">
                <img src="<?php echo $produto["foto"]; ?>" class="card-img-top" alt="...">
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

  </body>
</html>