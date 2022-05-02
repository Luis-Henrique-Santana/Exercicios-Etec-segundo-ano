<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<body>
	<?php
		 $nome = $_POST['nome'];
		echo "Seu nome é: " . $nome . "<br><br>";
		 $idade = $_POST['idade'];
		echo "Sua idade é: " . $idade . "<br><br>";
		 $senha = $_POST['senha'];
		echo "Sua senha é: " . $senha . "<br><br>";
		 $sexo = $_POST['sexo'];
		echo "Seu sexo é: " . $sexo . "<br><br>";

		$upload = "perfil/".basename($_FILES['foto']['name']);
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $upload)); {
			echo "<img src='".$upload."'>";
		}


		 $formacao = $_POST['formacao'];
		echo "Sua formacao é: " . $formacao . "<br><br>";

		foreach ($_POST['hobbie'] as $hobbie) {
			echo "seu hobbie é: " . $hobbie;
		}
	?>
</body>
</html>