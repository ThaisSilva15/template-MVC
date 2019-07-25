<div>
	<form action="" method="POST" enctype="multipart/form-data">

		Nome<input type="text" name="nome"><br>
		Preco<input type="number" name="preco"><br>

		<select name="categoria">
			<option value="default">Selecione uma categoria</option>
		<?php foreach ($categorias as $categoria):?>
			<option value="<?=$categoria["idCategoria"]?>"><?=$categoria["nome"]?></option>
		<?php endforeach;?>
		</select><br>

		<textarea name="descricao" cols="10" rows="10">Descricao</textarea><br>
		Imagem<input type="file" name="imagem"><br>

		Estoque minimo<input type="number" name="est_min"><br>
		Estoque maximo<input type="number" name="est_max"><br>

		<button type="submit">Cadastrar Produto</button>
	</form>
</div>