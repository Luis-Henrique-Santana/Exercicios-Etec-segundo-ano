<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 2.1</title>
</head>
<body>
<?php
if ($_POST['login'] == "adm" && $_POST['senha'] == "batata") {
	echo "<h1>Login feito</h1>";
}
else{
	?>
	<form method="post" action="php.php">
	login não feito
<fieldset>
<h2>
	Insira os seus dados
</h2><br><br>
<h4>Login:</h4>
<input type="text" name="login">
(dica:adm)
<br><br>
<h4>Senha:</h4>
<input type="password" name="senha">
(dica:batata)
<br><br>
<button type="submit">Entrar</button>
</form>
</fieldset>
	<?php
}
//aaeeeeee finalmente consegui fazer isso, eu estou a muito tempo tentandando uma 6 aulas e consegui
?>
</body>
</html>
