<meta charset="utf-8">
<style type="text/css">
fieldset{
	background-color: lightyellow;
		border: 5px;
		border-color: ;
}
</style>
<fieldset>
<center>
<?php
foreach ($_POST['pesquisa'] as $pesquisa) {
			echo "<br><br>Seu pesquisa é: $pesquisa ";
		}
?>
<br><br><br>
<a href="http://localhost:8085/projeto%201/"><button>Voltar</button></a>
</center>
</fieldset>