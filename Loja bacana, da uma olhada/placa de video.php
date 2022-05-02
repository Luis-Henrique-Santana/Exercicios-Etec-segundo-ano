 min="0"<?php
session_start();
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssitens.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<head>

  <title>HOME</title>
</head>
<style media="screen">
form{
  background-color: rgb(105,105,105);
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
        <a href="carrinho.php">
        <img src="img/carrinho.png" width="50" height="50" align="justify" id="carrinhomuitomassa">
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
        <a class="nav-link" href="placa de video.php">Placas de Vídeos<span class="sr-only">(current)</span></a>
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
  <form method="post">
<center>
<div class="container">
  <div class="row">
  <div class="col">
      <input value="<img src='img/1-placa-de-video.jpg'>" type="hidden" name="imgpv1"><br>
      <img src="img/1-placa-de-video.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepv1">
      <input type="hidden" name="precopv1" value="1600,00">
      MSI GEforce GTX 1660 TI 6GB GDDR6 R$1600,00
       <input type="checkbox" name="pv1">
    </div>
    <div class="col">
      <input value="<img src='img/2-placa-de-video.jpg'>" type="hidden" name="imgpv2"><br>
      <img src="img/2-placa-de-video.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepv2">
      <input type="hidden" name="precopv2" value="200,00">
      Radeon R5 230 1f GDDR3 R$200,00
      <input type="checkbox" name="pv2">
    </div>
    <hr>
    <div class="row">
    <div class="col">
      <input value="<img src='img/3-placa-de-video.jpg'>" type="hidden" name="imgpv3"><br>
      <img src="img/3-placa-de-video.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepv3">
      <input type="hidden" name="precopv3" value="210,00">
      GALAX GEforce GT 710 1GB DDR3 R$210,00
      <input type="checkbox" name="pv3">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input value="<img src='img/4-placa-de-video.jpg'>" type="hidden" name="imgpv4"><br>
      <img src="img/4-placa-de-video.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepv4">
      <input type="hidden" name="precopv4" value="4705,76">
      GEforce RTX 2080 8GB GDDR6 R$4705,76
      <input type="checkbox" name="pv4">
    </div>
    <div class="col">
      <input value="<img src='img/5-placa-de-video.jpg'>" type="hidden" name="imgpv5"><br>
      <img src="img/5-placa-de-video.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepv5">
      <input type="hidden" name="precopv5" value="1294.00">
      Radeon RX 590 8GB GDDR5 R$1294,00
      <input type="checkbox" name="pv5">
    </div>
  </div>
</div>
<br>
<input type="submit" name="pv">
</div>
</center>
</form>
<?php
if(isset($_POST['pv1'])) {
  $_SESSION['conta'] += 1600.00;
  $_SESSION['nomepv1'] = array();
  array_push($_SESSION['nomepv1'], $_POST['pv1'],1600.00);
}
if(isset($_POST['pv2'])) {
  $_SESSION['conta'] += 200.00;
  $_SESSION['nomepv2'] = array();
  array_push($_SESSION['nomepv2'], $_POST['pv2'],200.00);
}
if(isset($_POST['pv3'])) {
  $_SESSION['conta'] += 210.00;
  $_SESSION['nomepv3'] = array();
  array_push($_SESSION['nomepv3'], $_POST['pv3'],210.00);
}
if(isset($_POST['pv4'])) {
  $_SESSION['conta'] += 4705.76;
  $_SESSION['nomepv4'] = array();
  array_push($_SESSION['nomepv4'], $_POST['pv4'],4705.76);
}
if(isset($_POST['pv5'])) {
  $_SESSION['conta'] += 1294.00;
  $_SESSION['nomepv5'] = array();
  array_push($_SESSION['nomepv5'], $_POST['pv5'],1294.00);
}
?>
</body>
</html>
