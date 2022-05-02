<?php
session_start();
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="csscarrinho.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<head>
  <title>HOME</title>
</head>
<style media="screen">
body{
  background-color: rgb(105,105,105);
}
input{
  background-color:  rgb(200,200,200)
}
</style>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<font face="Fantasy">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Turing PCs</a>
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
        <a class="nav-link" href="placa mae.php">Placas-Mães<span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="carrinho.php">Carrinho<span class="sr-only">(current)</span></a>
      </li>
       </ul>
  </div>
    </nav>
</font>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
      if (isset($_SESSION['conta'])) {
      echo "O preço total do carrinho é: ";
       ?>
       <input type="number" disabled value="<?php echo $_SESSION['conta']; ?>">
       <?php
     }else {
       echo "Não há nada no carrinho ";
     }
      ?>
    </div>
    <a href="destruicao.php"><button>Comprar</button></a>
    <br><br>
    <a href="destruicao.php"><button>Limpar carrinho</button></a>

  </div>
</div>
</body>
</html>
