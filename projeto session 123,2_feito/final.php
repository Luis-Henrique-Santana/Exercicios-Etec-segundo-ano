<?php
    session_start();
    ini_set( 'display_errors', 0 );

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <title>Acabou</title>
  </head>
      <style>
            body{
                 background-image:url("http://www.allwhitebackground.com/images/5/Dark-Texture-Background-Images-HD.jpg");
                 background-repeat:repeat;
                 width: 100%;
                 height: 100%;
                 border-width: 2px;
                 border-color: black;
                 border-style: solid;
                 display: inline-block;
            }

             fieldset{
              background-image: url("back.jpg");
             } 
             div {

                 width: 100%;
                 height: 100%;
                 border-width: 2px;
                 border-color: black;
                 border-style: solid;
                 display: inline-block;
             }
             #img1 {
                border-radius: 20px;
                width: 16%;
                height: 16%;
             }
             #img2 {
                 border-radius: 20px;
                 width: 26%;
                 height: 26%;
             }
             #img3 {
                 border-radius: 20px;
                 width: 21%;
                 height: 21%;
             }
              #img4 {
                 border-radius: 20px;
                 width: 21%;
                 height: 21%;
             }


      div.figure {
      float: center;
     position :relative;
      width: 80%;
      text-align: center;
      font-style: italic;
      font-size: smaller;
      text-indent: 0;
      border: white  solid;
       margin: 0.5em;
      padding: 0.5em;
    }
         </style>
  <body>
    <font color="#ffffff" face="comic sans ms">
    Resultados<br>
    <?php

   if ($_SESSION['foto']=="foto1") {
   	echo '<img src="img1.png" id="img1">';
   }
  	   if ($_SESSION['foto']=="foto2") {
   	echo '<img src="img2.png" id="img2">';
   }
      if ($_SESSION['foto']=="foto3") {
   	echo '<img src="img3.png" id="img3">';
   }
      if ($_SESSION['foto']=="foto4") {
   	echo '<img src="img4.png" id="img4">';
   };

    	foreach ($_SESSION as $key => $value) {
        echo "<br>";
        echo $value;
        v=="Certa resposta";
        }

    ?>
    <br>
    <a href="index.php"><button>reiniciar</button></a>
    </form>
  </font>
  </body>
</html>