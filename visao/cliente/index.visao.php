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
	<?php foreach ($clientes as $cliente):?>
		<tr>
			<td><?=$cliente["idCliente"]?></td>
			<td><?=$cliente["nome"]?></td>
			<td><a href="cliente/visualizar/<?=$cliente["idCliente"]?>">VIEW</a></td>
			<td><a href="cliente/editar/<?=$cliente["idCliente"]?>">EDIT</a></td>
			<td><a href="cliente/deletar/<?=$cliente["idCliente"]?>">DELETE</a></td>
		</tr>
	<?php endforeach;?>
</table>

<a href="cliente/adicionar">Adicionar um cliente</a>