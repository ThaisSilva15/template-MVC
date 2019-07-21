<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>VIEW</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	</thead>
	<?php foreach ($categorias as $categoria):?>
		<tr>
			<td><?=$categoria["idCategoria"]?></td>
			<td><?=$categoria["nome"]?></td>
			<td><a href="categoria/visualizar/<?=$categoria["idCategoria"]?>">VIEW</a></td>
			<td><a href="categoria/editar/<?=$categoria["idCategoria"]?>">EDIT</a></td>
			<td><a href="categoria/deletar/<?=$categoria["idCategoria"]?>">DELETE</a></td>
		</tr>
	<?php endforeach;?>
</table>

<a href="categoria/adicionar">Adicionar Categoria</a>