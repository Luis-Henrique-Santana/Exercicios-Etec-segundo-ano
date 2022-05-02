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
        <a class="nav-link" href="processador.php">Processadores<span class="sr-only">(current)</span></a>
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
  <FORM method="post">
<center>
<div class="container">
  <div class="row">
  <div class="col">
      <input value="<img src='img/1-processador.jpg'>" type="hidden" name="imgpr1"><br>
      <img src="img/1-processador.jpg"><br>
      <input type="hidden" value="AMD FX Black Edition" name="nomepr1">
      <input type="hidden" name="precopr1" value="300,00">
       AMD FX Black Edition R$300,00
       <input type="checkbox" name="pr1">
    </div>
    <div class="col">
      <input value="<img src='img/2-processador.jpg'>" type="hidden" name="imgpr2"><br>
      <img src="img/2-processador.jpg"><br>
      <input type="hidden" value="Intel Pentium Gold" name="nomepr2">
      <input type="hidden" name="precopr2" value="320,00">
      Intel Pentium Gold R$320,00
      <input type="checkbox" name="pr2">
    </div>
    <hr>
    <div class="row">
    <div class="col">
      <input value="<img src='img/3-processador.jpg'>" type="hidden" name="imgpr3"><br>
      <img src="img/3-processador.jpg"><br>
      <input type="hidden" value="Intel Core I9" name="nomepr3">
      <input type="hidden" name="precopr3" value="3000,00">
      Intel Core I9 R$3000,00
      <input type="checkbox" name="pr3">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input value="<img src='img/4-processador.jpg'>" type="hidden" name="imgpr4"><br>
      <img src="img/4-processador.jpg"><br>
      <input type="hidden" value="Intel Celeron G4900" name="nomepr4">
      <input type="hidden" name="precopr4" value="230,00">
      Intel Celeron G4900 R$230,00
      <input type="checkbox" name="pr4">
    </div>
    <div class="col">
      <input value="<img src='img/5-processador.jpg'>" type="hidden" name="imgpr5"><br>
      <img src="img/5-processador.jpg"><br>
      <input type="hidden" value="AMD A6" name="nomepr5">
      <input type="hidden" name="precopr5" value="200,00">
      AMD A6 R$200,00
      <input type="checkbox" name="pr5">
    </div>
  </div>
</div>
</div>
<br>
<input type="submit" name="Processador">
</center>
</FORM>
<?php
if(isset($_POST['pr1'])) {
  $_SESSION['conta'] += 300.00;
  $_SESSION['nomepr1'] = array();
  array_push($_SESSION['nomepr1'], $_POST['pr1'],300.00);
}
if(isset($_POST['pr2'])) {
  $_SESSION['conta'] += 320.00;
  $_SESSION['nomepr2'] = array();
  array_push($_SESSION['nomepr2'], $_POST['pr2'],320.00);
}
if(isset($_POST['pr3'])) {
  $_SESSION['conta'] += 3000.00;
  $_SESSION['nomepr3'] = array();
  array_push($_SESSION['nomepr3'], $_POST['pr3'],3000.00);
}
if(isset($_POST['pr4'])) {
  $_SESSION['conta'] += 230.00;
  $_SESSION['nomepr4'] = array();
  array_push($_SESSION['nomepr4'], $_POST['pr4'],230.00);
}
if(isset($_POST['pr5'])) {
  $_SESSION['conta'] += 200.00;
  $_SESSION['nomespr5'] = array();
  array_push($_SESSION['nomepr5'], $_POST['pr5'],200.00);
}
?>
</body>
</html>
