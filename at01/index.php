<?php
if (isset($_POST['nome']=="" ||$_POST['senha']=="")) {
	echo"insira algo"
}
else{
echo "<h3> Recuperando dados </h3>";
echo "Nome: ".$_POST['nome'];
echo "<br>";
echo "senha: ".$_POST['senha'];
}
?>