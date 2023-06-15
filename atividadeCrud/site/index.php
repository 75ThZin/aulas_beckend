<?php
    include_once "../template/cabecalho.php";
?>

 <!--inicio do menu-->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Alunos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


<li class="nav-item">
          <a class="nav-link" href="../produto/index.php">dados</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 <!--final do menu-->

<hr>

<!--lista de produtos-->
<div class="container">
    <div class="row row-cols-4 g-4">
    </div>
</div>

<!--final da lista de produtos-->

<hr>

<?php
    include_once "../template/rodape.php";
?>