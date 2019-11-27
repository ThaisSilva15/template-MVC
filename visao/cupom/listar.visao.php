<h2>Listar Cupom </h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto">ID</th>
			<th class="th-produto">NOME CUPOM</th>
			<th class="th-produto">DESCONTO</th>
			<th class="th-produto">VER</th>
			<th class="th-produto">DELETAR</th>
			<th class="th-produto">ALTERAR</th>
		</tr>
	</thead>
		<?php foreach ($cupoms as $cupom): ?>
			<tr>
				<td class="th-produto"><?=$cupom['idcupom']?></td>
				<td class="th-produto"><?=$cupom['nomecupom']?></td>
				<td class="th-produto"><?=$cupom['desconto']?></td>
				<td class="th-produto"><a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a></td>
				<td class="th-produto"><a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a></td>
                                <td class="th-produto"><a href="./cupom/editar/<?=$cupom['idcupom']?>">Alterar</a></td>
			</tr>
		<?php endforeach; ?>
</table>
<a href="./cupom/cadastro" class="btn btn-primary"> Novo cupom </a>        