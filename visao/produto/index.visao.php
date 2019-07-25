<table>
	<thead>
		<tr>
			<th></th>
			<th>ID</th>
			<th>NOME</th>
			<th>VIEW</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	</thead>
	<?php foreach ($produtos as $produto):?>
		<tr>
			<td><img src="<?=$produto["imagem"]?>" style="width:40px; heigth:40px;"></td>
			<td><?=$produto["idProduto"]?></td>
			<td><?=$produto["nome"]?></td>
			<td><a href="produto/visualizar/<?=$produto["idProduto"]?>">VIEW</a></td>
			<td><a href="produto/editar/<?=$produto["idProduto"]?>">EDIT</a></td>
			<td><a href="produto/deletar/<?=$produto["idProduto"]?>">DELETE</a></td>
		</tr>
	<?php endforeach;?>
</table>

<a href="produto/adicionar">Adicionar produto</a>