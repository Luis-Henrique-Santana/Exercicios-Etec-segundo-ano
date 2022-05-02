	<!DOCTYPE html>
	<html>
	<head>
		<title>
			Informações
		</title>
		<meta charset="utf-8">
		<style type="text/css">
			fieldset{
	width: 70%;
	border-radius:5px;
	font-family: Arial;
	border-color: grey;
}
			body{
				background-color: lightgrey;
			}

		</style>
	</head>
	<body>
	<?php 
	echo "<center><fieldset>";
	echo "<h1>Informações</h1>";
	echo "<fieldset><h2>Identificação</h2><br>";
		if (isset($_POST['nome'])) {
			$nome = $_POST['nome'];
			echo "Seu nome é: $nome";
		}
		if ($_POST['nascimento']) {
			$nascimento = $_POST['nascimento'];
			echo "<br><br>Sua data de nascimento é: $nascimento";
		}
		foreach ($_POST["sexo"] as $sexo) {
			echo "<br><br>Seu sexo é: $sexo ";
		}
		if ($_POST['rg']) {
			$rg = $_POST['rg'];
			echo "<br><br>seu rg é é: $rg";
		}
		echo"</fieldset>";



		echo "<fieldset><h2>Localização</h2><br>";
		$cep=$_POST['cep'];
		echo "CEP: $cep<br><br>";

		$endereco=$_POST['endereco'];
		echo "Endereço: $endereco <br><br>";

		$bairro=$_POST['bairro'];
		echo "bairro: $bairro<br><br>";

		$cidade=$_POST['cidade'];
		echo "cidade: $cidade<br><br>";

		$telefone=$_POST['telefone'];
		echo "telefone: $telefone<br><br>";

		$email=$_POST['email'];
		echo "E-mail: $email";
		echo "</fieldset>";



		echo "<fieldset><h2>Pretenção</h2><br>";
		foreach ($_POST["area"] as $area) {
			echo "A área desejada é: $area<br><br>";
		}

		$salario=$_POST['salario'];
		echo "Salário Pretendido: $salario <br><br>";

		$cargo=$_POST['cargo'];
		echo "cargo: $cargo<br><br></fieldset>";



		echo "<fieldset><h2>Formação</h2><br>";

		$nivel=$_POST['nivel'];
		echo "Nivel: $nivel<br><br>";

		$instituição=$_POST['instituição'];
		echo "Instituição: $instituição <br><br>";

		$conclusao=$_POST['conclusao'];
		echo "Ano de Conclusão: $conclusao<br><br>";

		echo "</fieldset></center>";
	?>	
	</body>
	</html>