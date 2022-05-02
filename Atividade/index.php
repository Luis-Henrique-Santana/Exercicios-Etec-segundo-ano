<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>
		Informações
	</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="php.php">
	<fieldset><legend>Informações</legend>
		<fieldset><legend>Identificação</legend>
	<div id="Identificação">
	<label>Nome:
<input type="text" name="nome" required>
	</label>
	<br><br>
	<label>Data de Nascimento:
<input type="date" name="nascimento" required>
	</label>
	<br><br>
	<label>Sexo:<br>
<input type="checkbox" value="Masculino" name="sexo[]">Masculino
<br>
<input type="checkbox" value="Feminino" name="sexo[]">Feminino
<br>
<input type="checkbox" value="Outro" name="sexo[]">Outro
	</label>
	<br><br>
	<label>RG
<input type="number" name="rg" required>
	</label>
	<br><br>
	<label>CPF
<input type="number" name="cpf" required>
	</label>
	</div>
		</fieldset>
	<br><br>
	<fieldset><legend>Localização</legend>
			<div id="localização">
	<label>C.E.P:
<input type="number" name="cep"  required>
	</label>
	<br><br>
	<label>Endereço:
<input type="text" name="endereco"  required>
	</label>
	<br><br>
	<label>Bairro:
<input type="text" name="bairro"  required>
	</label>
	<br><br>
	<label>Cidade:
<input type="text" name="cidade"  required>
	</label>
	<br><br>
	<label>Telefone:
<input type="number" name="telefone"  required>
</label>
<br><br>
<label>E-mail:
<input type="text" name="email"  required>
	</label>
	</div>
	</fieldset>
	<br><br>
	<fieldset><legend>Pretenção</legend>
		<div id="pretenção">
			<label>Área Desejada
				<br>
<input type="checkbox" value="Juridico" name="area[]">Juridico
	<br>
<input type="checkbox" value="Financeiro" name="area[]">Financeiro
	<br>
<input type="checkbox" value="Produção" name="area[]">Produção
	<br>
<input type="checkbox" value="T.I" name="area[]">T.I
	</label>
	<br><br>
	<label>Salário Pretendido:
<input type="number" name="salario"  required>
</label>
<br><br>
<label>Cargo:
<input type="text" name="cargo"  required>
	</label>
	</div>
	</fieldset>
	<br><br>
	<fieldset><legend>Formação</legend>
		<label>Nivel
<input type="select" name="nivel"  required>
	</label>
	<br><br>
	<label>Instituição
<input type="text" name="instituição"  required>
	</label>
	<br><br>
	<label>Ano de conlusão
<input type="text" name="conclusao"  required>
	</label>
	</fieldset>
	<button class="submit">Enviar</button>
<button>Cancelar</button>
</fieldset>
</form>
</body>
</html>