<div>
	<form action="" method="POST">
		Nome:<input type="text" name="nome"><br>
		Email:<input type="email" name="email"><br>
		Senha:<input type="password" name="senha"><br>
		CPF:<input type="number" name="cpf"><br><br>

		Nascimento<br>
		<select name="dia">
			<option value="default">Dia</option>
			<?php for ($i=1; $i<=31 ; $i++):?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>
		<select name="mes">
			<option value="default">Mês</option>
			<?php for ($i=1; $i<=12 ; $i++):?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>
		<select name="ano">
			<option value="default">Ano</option>
			<?php //for ($i=date("Y"); $i >=1900 ; $i--):
				for ($i=date("Y"); $i >=(date("Y")-80) ; $i--):
			?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>

		<br><br>

		Sexo<br>
		<select name="sexo">
			<option value="default">Selecione um sexo</option>
			<option value="f">Feminino</option>
			<option value="m">Masculino</option>
			<option value="o">Outro</option>
		</select>

		<br><br>

		<button type="submit">Cadastrar</button>
	</form>
</div>