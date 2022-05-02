<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		if (isset($_POST['nome'])) {
			$nome_completo = $_POST['nome']." ".$_POST['snome'];
			echo "<h1>BEM VINDO $nome_completo</h1>";

		}

	?>
</head>
<body>
	<fieldset>
		<legend>form educadinho</legend>
		<form method="post">
			<p><label for="nome">Nome: </label></p>
			<input type="text" name="nome" required>
			<p><label for="snome">Sobrenome: </label></p>
			<input type="text" name="snome" required>
			<input type="submit" value="EXIBIR">
		</fieldset>
	</form>
</body>
</html>