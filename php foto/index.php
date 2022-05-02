<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" action="teste.php" method="POST">
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>
</body>
</html>