<?php
session_start();

?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<head>
  <title>HOME</title>
  <style type="text/css">
    fieldset{
      background-color: rgb(105,105,105);
    }
  </style>
</head>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<font face="Arial">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Turing PCs</a>
        <a href="carrinho.php">

    Carrinho<img src="img/carrinho.png" width="50" height="50" id="carrinhomuitomassa">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="pcs.php">Computadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="processador.php">Processadores</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="placa mae.php">Placas-Mães</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="placa de video.php">Placas de Vídeos</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="mouse teclado.php">Kits Mouses e teclados</a>
      </li>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="ssd.php">SSDs</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="carrinho.php">Carrinho</a>
      </li>
       </ul>
  </div>
    </nav>
</font>
</div>
<center>
  <fieldset>
  <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="pcs.php">
      <img class="d-block w-60" src="img/1-PC.jpg" alt="Computadores">
    </a>
    </div>
    <div class="carousel-item">
      <a href="processador.php">
      <img class="d-block w-60" src="img/3-processador.jpg" alt="Processadores">
    </a>
    </div>
    <div class="carousel-item">
      <a href="mouse teclado.php">
      <img class="d-block w-60" src="img/2-mt.jpg" alt="Mouses e teclados">
    </a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
 <div class="container">
   <div class="row">
     <div class="col-md-12">
      <h2>Nós somos a Turing PCs, estamos começando novos negócios virtuais, com o tema de computadores e seus periféricos, por enquanto não estamos fazendo entrega, porque este site é apenas um beta para um trabalho escolar.<br>Dedicado à Diogenes!!!👌<br></h2>
     </div>
   </div>
 </div>
</fieldset>
</center>
</body>
</html>
