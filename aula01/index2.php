<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend>form educadinho</legend>
		<form method="post">
			<p><label for="n1">N1</label></p>
			<p><label for="n2">N2</label></p>
			<input type="text" name="n2" required>
			<input type="submit" value="EXIBIR">
	</form>
	<h1>
	<?php
		if (isset($_POST['n1'])) {
			error_reporting(0);
			$r= $_POST['n1']+$_POST['n2'];
			echo $_POST['n1']." + ".$_POST['n2']." = ".$r."<br>";

			$r= $_POST['n1']-$_POST['n2'];
			echo $_POST['n1']." - ".$_POST['n2']." = ".$r."<br>";

			$r= $_POST['n1']*$_POST['n2'];
			echo $_POST['n1']." * ".$_POST['n2']." = ".$r."<br>";

			$r= $_POST['n1']/$_POST['n2'];
			echo $_POST['n1']." / ".$_POST['n2']." = ".$r."<br>";

			$r= $_POST['n1']%$_POST['n2'];
			echo $_POST['n1']." % ".$_POST['n2']." = ".$r."<br>";
		}
	?>
	</h1>
</fieldset>
</body>
</html>