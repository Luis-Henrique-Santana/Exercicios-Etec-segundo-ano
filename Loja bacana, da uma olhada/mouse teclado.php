<?php
session_start();
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="cssitens.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<head>
  <style media="screen">
  form{
    background-color: rgb(105,105,105);
  }
  </style>
  <title>HOME</title>
</head>
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
        <a class="nav-link" href="mouse teclado.php">Kits Mouses e teclados<span class="sr-only">(current)</span></a>
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
      <input value="<img src='img/1-mt.jpg'>" type="hidden" name="imgmt1"><br>
      <img src="img/1-mt.jpg"><br>
      <input type="hidden" value="Kit Gamer Trust Ziva 4x1" name="nomemt1">
      <input type="hidden" name="precomt1" value="136,25">
       Kit Gamer Trust Ziva 4x1 R$136,25
       <input type="checkbox" name="mt1">
    </div>
    <div class="col">
      <input value="<img src='img/2-mt.jpg'>" type="hidden" name="imgmt2"><br>
      <img src='img/2-mt.jpg'><br>
      <input type="hidden" name="precomt3" value="493,99">
      Kit Teclado e Mouse Logitech MK850 Performance Bluetooth R$493,99
      <input type="checkbox" name="mt2">
    </div>
  </div>

    <div class="col">
      <input value="<img src='img/4-mt.jpg'>" type="hidden" name="imgmt5"><br>
      <img src="img/4-mt.jpg"><br>
      <input type="hidden" value="Kit Teclado e Mouse Microsoft Wireless"><br>
      <input type="hidden" value="Kit Teclado Mouse Gamdias Poseidon M1 Combo" name="nomemt2">
      <input type="hidden" name="precomt2" value="199,89">
      Kit Teclado Mouse Gamdias Poseidon M1 Combo R$199,89
      <input type="checkbox" name="mt3">
    </div>
    <hr>
    <div class="row">
    <div class="col">
      <input value="<img src='img/3-mt.jpg'>" type="hidden" name="imgmt3"><br>
      <img src="img/3-mt.jpg"><br>
      <input type="hidden" name="nomemt4">
      <input type="hidden" name="precomt4" value="369,90">
      Kit Teclado e Mouse Microsoft Wireless Comfort 5050 R$369,90
      <input type="checkbox" name="mt4">
    </div>
      <div class="row">
    <div class="col">
      <input value="<img src='img/5-mt.jpg'>" type="hidden" name="imgmt5"><br>
      <img src="img/5-mt.jpg"><br>
      <input type="hidden" value="Kit Teclado e Mouse Trust Ziva Wireless" name="nomemt5">
      <input type="hidden" name="precomt5" value="73,86">
      Kit Teclado e Mouse Trust Ziva Wireless R$73,86
      <input type="checkbox" name="mt5">
    </div>
  </div>
</div>
<br>
<input type="submit" name="mt">
</div>
</center>
</form>
<?php
if(isset($_POST['mt1'])) {
  $_SESSION['conta'] += 136.25;
  $_SESSION['nomemt1'] = array();
  array_push($_SESSION['nomemt1'], $_POST['mt1'],136.25);
}
if(isset($_POST['mt2'])) {
  $_SESSION['conta'] += 199.89;
  $_SESSION['nomemt2'] = array();
  array_push($_SESSION['nomemt2'], $_POST['mt2'],199.89);
}
if(isset($_POST['mt3'])) {
  $_SESSION['conta'] += 493.99;
  $_SESSION['nomemt3'] = array();
  array_push($_SESSION['nomemt3'], $_POST['mt3'],493.99);
}
if(isset($_POST['mt4'])) {
  $_SESSION['conta'] += 369.90;
  $_SESSION['nomemt4'] = array();
  array_push($_SESSION['nomemt4'], $_POST['mt4'],369.90);
}
if(isset($_POST['mt5'])) {
  $_SESSION['conta'] += 73.86;
  $_SESSION['nomesmt5'] = array();
  array_push($_SESSION['nomemt5'], $_POST['mt5'],73.86);
}
?>
</body>
</html>
