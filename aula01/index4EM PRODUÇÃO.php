 <html>
<head>
	<title></title>
<meta charset="utf-8">	
</head>
<body>
	<fieldset>
		<legend>form educadinho</legend>
		<form method="post">
			<p><label for="n1">N1 </label></p>
			<input type="text" name="n1" required>
			<p><label for="n2">N2 </label></p>
			<input type="text" name="n2" required>
			<input type="submit" value="EXIBIR">
		
	</form>
	<?php
		if (isset($_POST['n1'])) {
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			if ($n1>$n2) {
				for ($i=$n1; $i>=$n2 ; $i--) { 
					echo $i."<br>";				
				}
			}
			else if ($n2>$n1) {
				for ($i=$n2; $i<=$n1 ; $i++) { 
					echo $i."<br>";				
				}
			}
			else{
				echo "Os numeros sao iguais";
			}
		}

	?>
</fieldset>
</body>
</html>