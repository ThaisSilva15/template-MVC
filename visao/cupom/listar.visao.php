<h2>Listar Cupom </h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOME CUPOM</th>
			<th>DESCONTO</th>
			<th>VER</th>
			<th>DELETAR</th>
			<th>ALTERAR</th>
		</tr>
	</thead>
		<?php foreach ($cupoms as $cupom): ?>
			<tr>
				<td><?=$cupom['idcupom']?></td>
				<td><?=$cupom['nomecupom']?></td>
				<td><?=$cupom['desconto']?></td>
				<td><a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a></td>
				<td><a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a></td>
                                <td><a href="./cupom/editar/<?=$cupom['idcupom']?>">Alterar</a></td>
			</tr>
		<?php endforeach; ?>
</table>
<a href="./cupom/cadastro" class="btn btn-primary"> Novo cupom </a>        