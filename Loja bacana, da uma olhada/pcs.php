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
        <a class="nav-link" href="pcs.php">Computadores<span class="sr-only">(current)</span></a>
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
  <div class="col" id="pc1">
      <input value="<img src='img/1-pc.jpg'>" type="hidden" name="imgpc1"><br>
      <img src="img/1-pc.jpg"><br>
      <input type="hidden" value="AMD Ryzen 5, GTX 1050 6GB gddr5, 8GB ddr4" name="nomepc1">
      <input type="hidden" name="precopc1" value="2500,00">
       AMD Ryzen 5, GTX 1050 6GB gddr5, 8GB ddr4 R$2500,00
       <input type="checkbox" name="pq1">
    </div>
    <div class="col" id="pc2">
      <input value="<img src='img/2-pc.jpg'>" type="hidden" name="imgpc2">
      <img src="img/2-pc.jpg"><br>
      <input type="hidden" value="AMD Ryzen 9, RTX 2060 8GB gddr5, 16GB ddr4" name="nomepc2">
      <input type="hidden" name="precopc2" value="6532,27">
      AMD Ryzen 9, RTX 2060 8GB gddr5, 16GB ddr4 R$6532,27
      <input type="checkbox" name="pq2">
    </div>
  </div>
     <hr>
    <div class="row">
    <div class="col" id="pc3">
      <input value="<img src='img/3-pc.jpg'>" type="hidden" name="imgpc3"><br>
      <img src="img/3-pc.jpg"><br>
      <input type="hidden" value="Intel i5, Radeon RX580 6GB gddr5, 8GB" name="nomepc3">
      <input type="hidden" name="precopc3" value="3000,00">
      Intel i5, Radeon RX580 6GB gddr5, 8GB ddr4 R$3000,00
      <input type="checkbox" name="pq3">
    </div>
    <div class="col" id="pc4">
      <input value="<img src='img/4-pc.jpg'>" type="hidden" name="imgpc4"><br>
      <img src="img/4-pc.jpg"><br>
      <input type="hidden" value="AMD Ryzen 5, GTX 1030 6GB gddr5, 6GB ddr4 com monitor" name="nomepc4">
      <input type="hidden" name="precopc4" value="2000,00">
      AMD Ryzen 5, GTX 1030 6GB gddr5, 6GB ddr4 com monitor R$2000,00
      <input type="checkbox" name="pq4">
    </div></div>
    <hr>
    <div class="row">
    <div class="col" id="pc5">
      <input value="<img src='img/5-pc.jpg'>" type="hidden" name="imgpc5"><br>
      <img src="img/5-pc.jpg"><br>
      <input type="hidden" value="AMD A6 com graficos integrados, 6GB ddr4" name="nomepc5">
      <input type="hidden" name="precopc5" value="1500,00">
      AMD A6 com graficos integrados, 6GB ddr4  R$1500,00
      <input type="checkbox" name="pq5">
      <br>
      <br>
      <input type="submit" name="pcs">
    </div>
     </div>
</div>
</div>
</center>
</FORM>
<?php
if(isset($_POST['pq1'])) {
  $_SESSION['conta'] += 2500.00;
  $_SESSION['nomepc1'] = $_POST['nomepc1'];
  $_SESSION['nomepc1'] = array();
  array_push($_SESSION['nomepc1'], $_POST['pq1'],2500.00);
}
if(isset($_POST['pq2'])) {
  $_SESSION['conta'] += 6532.27;
  $_SESSION['nomepc2'] = array();
  array_push($_SESSION['nomepc2'], $_POST['pq2'],6532.27);
}
if(isset($_POST['pq3'])) {
  $_SESSION['conta'] += 3000.00;
  $_SESSION['nomepc3'] = array();
  array_push($_SESSION['nomepc3'], $_POST['pq3'],3000.00);
}
if(isset($_POST['pq4'])) {
  $_SESSION['conta'] += 2000.00;
  $_SESSION['nomepc4'] = array();
  array_push($_SESSION['nomepc4'], $_POST['pq4'],2000.00);
}
if(isset($_POST['pq5'])) {
  $_SESSION['conta'] += 1500.00;
  $_SESSION['nomepc5'] = array();
  array_push($_SESSION['nomepc5'], $_POST['pq5'],1500.00);
}
?>
</body>
</html>
