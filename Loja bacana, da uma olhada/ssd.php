<?php
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
        <a class="nav-link" href="placa de video.php">Placas de Vídeos</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="mouse teclado.php">Kits Mouses e teclados</a>
      </li>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="ssd.php">SSDs<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="carrinho.php">Carrinho</a>
      </li>
       </ul>
  </div>
    </nav>
</font>
  <FORM method="post">
<center>
<div class="container">
  <div class="row">
  <div class="col">
      <input value="<img src='img/1-ssd.jpg'>" type="hidden" name="imgssd1"><br>
      <img src="img/1-ssd.jpg"><br>
      <input type="hidden" value="Kingston 200GB" name="nomessd1">
      <input type="hidden" name="precossd1" value="399,99">
      Kingston 200GB R$399,99
       <input type="checkbox" name="ps1">
    </div>
    <div class="col">
      <input value="<img src='img/2-ssd.jpg'>" type="hidden" name="imgssd2"><br>
      <img src="img/2-ssd.jpg"><br>
      <input type="hidden" value="SSD SanDisk 200GB" name="nomessd2">
      <input type="hidden" name="precossd2" value="430,00">
      SSD SanDisk 200GB R$430,00
      <input type="checkbox" name="ps2">
    </div>
    <hr>
    <div class="row">
    <div class="col">
      <input value="<img src='img/3-ssd.jpg'>" type="hidden" name="imgssd3"><br>
      <img src="img/3-ssd.jpg"><br>
      <input type="hidden" value="SSD WD Green 200GB" name="nomessd3">
      <input type="hidden" name="precossd3" value="420,00">
      SSD WD Green 200GB R$420,00
      <input type="checkbox" name="ps3">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input value="<img src='img/4-ssd.jpg'>" type="hidden" name="imgssd4"><br>
      <img src="img/4-ssd.jpg"><br>
      <input type="hidden" value="SSD Corsair 200G" name="nomessd5">
      <input type="hidden" name="precossd4" value="450,00">
      SSD Corsair 200GB R$450,00
      <input type="checkbox" name="ps4">
    </div>
    <div class="col">
      <input value="<img src='img/5-ssd.jpg'>" type="hidden" name="imgssd5"><br>
      <img src="img/5-ssd.jpg"><br>
      <input type="hidden" value="SSD Corsair 160GB" name="nomessd5">
      <input type="hidden" name="precossd5" value="300,00">
      SSD Corsair 160GB R$300,00
      <input type="checkbox" name="ps5">
    </div>
  </div>
</div>
</div>
<input type="submit" name="ssd">
</center>
</FORM>
<?php
if(isset($_POST['ps1'])) {
  $_SESSION['conta'] += 399.99;
  $_SESSION['nomessd1'] = array();
  array_push($_SESSION['nomessd1'], $_POST['ps1'],399.99);
}
if(isset($_POST['ps2'])) {
  $_SESSION['conta'] += 430.00;
  $_SESSION['nomessd2'] = array();
  array_push($_SESSION['nomessd2'], $_POST['ps2'],430.00);
}
if(isset($_POST['ps3'])) {
  $_SESSION['conta'] += 420.00;
  $_SESSION['nomepssd3'] = array();
  array_push($_SESSION['nomessd3'], $_POST['ps3'],420.00);
}
if(isset($_POST['ps4'])) {
  $_SESSION['conta'] += 450.00;
  $_SESSION['nomessd4'] = array();
  array_push($_SESSION['nomessd4'], $_POST['ps4'],450.00);
}
if(isset($_POST['ps5'])) {
  $_SESSION['conta'] += 300.00;
  $_SESSION['nomessd5'] = array();
  array_push($_SESSION['nomessd5'], $_POST['ps5'],300.00);
}
?>
</body>
</html>
