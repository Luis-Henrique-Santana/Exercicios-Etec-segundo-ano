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
   echo $_SESSION['nome'];
   echo "<br>";
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
    $ponto==0;
    	if ($_SESSION['p1']=="v") {
    		$ponto += 1;
    		echo "<br>pergunta 1: certa <br>";
    	}
    	else{
    		echo "pergunta 1: errada, resposta certa:Bruce Wayne<br>";
    	};
    	if ($_SESSION['p2']=="v") {
    		$ponto += 1;
    		echo "pergunta 2: certa<br>";
    	}
    	else{
    		echo "pergunta 2: errada, resposta certa:Batman vs Alien<br>";
    	};
    	if ($_SESSION['p3']=="v") {
    		$ponto += 1;
    		echo "pergunta 3: certa<br>";
    	}
    	else{
    		echo "pergunta 3: errada, resposta certa:Talia Al Ghul<br>";
    	};
    	if ($_SESSION['p4']=="v") {
    		$ponto += 1;	
    		echo "pergunta 4: certa<br>";
    	}
    	else{
    		echo "pergunta 4: errada, resposta certa:Batman Arkham Stories<br>";
    	};
    	if ($_SESSION['p5']=="v") {
    		$ponto += 1;	
    		echo "pergunta 5: certa<br>";
    	}
    	else{
    		echo "pergunta 5: errada, resposta certa:Joseph Kerr<br>";
    	};

    	echo "Sua pontuação foi $ponto";

    ?>
    <br>
    <a href="index.php"><button>reiniciar</button></a>
    </form>
  </font>
  </body>
</html>