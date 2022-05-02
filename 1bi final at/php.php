<?php
echo "<meta charset=utf-8>";
echo "nome :".$_POST['nome'];

foreach ($_POST['esporte'] as $esporte) {
			echo "<br><br>Seu esporte é: $esporte ";
		}

foreach ($_POST['assistir'] as $assistir) {
	echo "<br><br>Sua preferencia para assistir é: $assistir ";
}
foreach ($_POST['genero'] as $genero) {
	echo "<br><br>Sua preferencia para genero é: $genero ";
}
foreach ($_POST['leitura'] as $leitura) {
	echo "<br><br>Sua preferencia para Leitura é: $leitura ";
}
?>