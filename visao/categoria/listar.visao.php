<h2>Listar Categorias</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto">ID</th>
			<th class="th-produto">DESCRICAO</th>
			<th class="th-produto">VER</th>
			<th class="th-produto">DELETAR</th>
			<th class="th-produto">ALTERAR</th>
		</tr>
	</thead>
	<?php foreach ($categoria as $dados): ?>
		<tr>
			<td class="th-produto"><?=$dados['idcategoria']?></td>
			<td class="th-produto"><?=$dados['descricao']?></td>
                        <?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
			<td><a href="./categoria/ver/<?=$dados['idcategoria']?>">Ver</a></td>
			<td><a href="./categoria/deletar/<?=$dados['idcategoria']?>">Deletar</a></td>
                        <?php } ?>
			<td><a href="./categoria/editar/<?=$dados['idcategoria']?>">Alterar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<a href="./categoria/descricao" class="btn btn-primary"> Nova categoria</a>