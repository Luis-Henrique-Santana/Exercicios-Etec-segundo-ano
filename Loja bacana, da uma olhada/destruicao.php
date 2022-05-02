<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      session_destroy();
      header("Location: carrinho.php");
    ?>
  </body>
</html>
