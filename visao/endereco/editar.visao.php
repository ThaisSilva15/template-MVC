<form action="" method="POST" class="formulario-usuario">
	<label class="formulario-label" for="email"><b>Logradouro:</b></label>
	<input class="formulario-input" type="text"  placeholder="Logradouro" name="logradouro" value="<?=@$endereco['logradouro']?>" required="">

	<label class="formulario-label" for="psw"><b>Numero:</b></label>
	<input class="formulario-input" type="text" placeholder="Numero" name="numero" value="<?=@$endereco['numero']?>" required="">

	<label class="formulario-label" for="email"><b>Complemento:</b></label>
	<input class="formulario-input" type="text" placeholder="Complemento" name="complemento" value="<?=@$complemento['complemento']?>" >
	
	<label class="formulario-label" for="email"><b>Bairro:</b></label>
	<input class="formulario-input" type="text" placeholder="Bairro" name="bairro" value="<?=@$endereco['bairro']?>" required="">

	<label class="formulario-label" for="email"><b>Cidade:</b></label>
	<input class="formulario-input" type="text" placeholder="Cidade" name="cidade" value="<?=@$endereco['cidade']?>" required="">
	
	<label class="formulario-label" for="email"><b>Cep:</b></label>
	<input class="formulario-input" type="text" placeholder="00000000" name="cep" value="<?=@$endereco['cep']?>" required="">

	<button class="submit-button" type="submit">Atualizar</button>
</form>