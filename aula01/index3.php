 <html>
<head>
	<title></title>
<meta charset="utf-8">	
</head>
<body>
	<fieldset>
		<legend>form educadinho</legend>
		<form method="post">
			<p><label for="n1">Nome: </label></p>
			<input type="text" name="n1" required>
			<p><label for="n2">Sobrenome: </label></p>
			<input type="text" name="n2" required>
			<input type="submit" value="EXIBIR">
		</fieldset>
	</form>
	<?php
		if (isset($_POST['n1'])) {
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			if ($n1>$n2) {
				echo "o maior numero é $n1";
			}
			elseif ($n1<$n2) {
				echo "o maior numero é $n2";
			}
			else{
				echo "$n1 é igual a $n2";
			}
		}

	?>
</body>
</html>