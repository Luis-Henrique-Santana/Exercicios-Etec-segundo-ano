<!DOCTYPE html>
<html>
<head>
	<title>tell me why tell me why</title>
</head>
<meta charset="utf-8">
<body><style type="text/css">
	body{
		background-color: lightcyan;
			border: black;
	}

</style>

<center>		
	<fieldset>
	<form enctype="multpart/form-data" method="post" action="php.php">
<p>Nome: <input type="text" name="nome" required></p>
<p>Idade: <input type="number" name="idade" required></p>
<p>Senha: <input type="password" name="senha" required></p>
<p>Sexo: <input type="radio" name="sexo" value="M" required>Masculino
	<input type="radio" name="sexo" value="F" required>Feminino
	</p>
	<p>Formação:
		<select name="formacao">
			<option value="1">Fudamental</option>
				<option value="2">médio</option>
					<option value="3">superior</option><br><br>
			<p>Perfil:<input type="file" name="foto"></p> 
		</select>
	</p>
	<p>Hobbie:
		<input type="checkbox" name="hobbie[]" value="ler">ler quadrinhos
				<input type="checkbox" name="hobbie[]" value="assistir">assistir séries
						<input type="checkbox" name="hobbie[]" value="ouvir">ouvir música
	</p>
	<p>
		<input type="submit" value="enviar">
	</p>
	</form>
</fieldset>
</center>
</body>
</html>