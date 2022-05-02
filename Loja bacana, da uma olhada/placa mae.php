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
      <<input value="<img src='img/1-pm.jpg'>" type="hidden" name="imgpm1"><br>
      <img src="img/1-pm.jpg"><br>
      <input type="hidden" value="ASRock X870 Extreme 4" name="nomepm1">
      <input type="hidden" name="precopm1" value="1226,00">
       ASRock X870 Extreme 4 R$1226,00
       <input type="checkbox" name="pm1">
    </div>
    <div class="col">
      <input value="<img src='img/2-pm.jpg'>" type="hidden" name="imgpm2"><br>
      <img src="img/2-pm.jpg"><br>
      <input type="hidden" value="MSI MEG X570" name="nomepm2">
      <input type="hidden" name="precopm2" value="4549,00">
      MSI MEG X570 R$4549,00
      <input type="checkbox" name="pm2">
    </div>
    <hr>
    <div class="row">
    <div class="col">
      <input value="<img src='img/3-pm.jpg'>" type="hidden" name="imgpm3"><br>
      <img src="img/3-pm.jpg"><br>
      <input type="hidden" value="TUF B360-Plus Gaming" name="nomepm3">
      <input type="hidden" name="precopm3" value="499,00">
      TUF B360-Plus Gaming R$499,00
      <input type="checkbox" name="pm3">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input value="<img src='img/4-pm.jpg'>" type="hidden" name="imgpm4"><br>
      <img src="img/4-pm.jpg"><br>
      <input type="hidden" value="AORUS X570 Aorus Pro" name="nomepm4">
      <input type="hidden" name="precopm4" value="1728,00">
      AORUS X570 Aorus Pro R$1728,00
      <input type="checkbox" name="pm4">
    </div>
    <div class="col">
      <input value="<img src='img/5-pm.jpg'>" type="hidden" name="imgpm5"><br>
      <img src="img/5-pm.jpg"><br>
      <input type="hidden" value="MSI B450M Pro VDM Plus" name="nomepm5">
      <input type="hidden" name="precopm5" value="489,90">
      MSI B450M Pro VDM Plus R$489,90
      <input type="checkbox" name="pm5">
    </div>
  </div>
</div>
<input type="submit" name="pm">
</div>
</center>
</FORM>
<?php
if(isset($_POST['pr1'])) {
  $_SESSION['conta'] += 1226.00;
  $_SESSION['nomepm1'] = array();
  array_push($_SESSION['nomepm1'], $_POST['pm1'],1226.00);
}
if(isset($_POST['pr2'])) {
  $_SESSION['conta'] += 4549.00;
  $_SESSION['nomepm2'] = array();
  array_push($_SESSION['nomepm2'], $_POST['pm2'],4549.00);
}
if(isset($_POST['pr3'])) {
  $_SESSION['conta'] += 499.00;
  $_SESSION['nomepm3'] = array();
  array_push($_SESSION['nomepm3'], $_POST['pm3'],499.00);
}
if(isset($_POST['pr4'])) {
  $_SESSION['conta'] += 1728.00;
  $_SESSION['nomepm4'] = array();
  array_push($_SESSION['nomepm4'], $_POST['pm4'],1728.00);
}
if(isset($_POST['pr5'])) {
  $_SESSION['conta'] += 489.90;
  $_SESSION['nomepm5'] = array();
  array_push($_SESSION['nomepm5'], $_POST['pm5'],489.90);
}
?>
</body>
</html>
