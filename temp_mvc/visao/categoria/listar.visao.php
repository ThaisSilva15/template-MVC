<h2>Listar Categorias</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>DESCRICAO</th>
			<th>VER</th>
			<th>DELETAR</th>
		</tr>
	</thead>
	<?php foreach ($categoria as $dados): ?>
		<tr>
			<td><?=$dados['idcategoria']?></td>
			<td><?=$dados['descricao']?></td>
			<td><a href="./categoria/ver/<?=$dados['idcategoria']?>">Ver</a></td>
			<td><a href="./categoria/deletar/<?=$dados['idcategoria']?>">Deletar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<a href="./categoria/descricao" class="btn btn-primary"> Nova categoria</a>