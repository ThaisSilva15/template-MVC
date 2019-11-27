<h2>Listar Endereço</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto">ID</th>
			<th class="th-produto">LOGRADOURO</th>
			<th class="th-produto">NUMERO</th>
			<th class="th-produto">COMPLEMENTO</th>
			<th class="th-produto">BAIRRO</th>
			<th class="th-produto">CIDADE</th>
                        <th class="th-produto">CEP</th>
			<th class="th-produto">VER</th>
			<th class="th-produto">DELETAR</th>
			<th class="th-produto">ALTERAR</th>
		</tr>
	</thead>
		<?php foreach ($enderecos as $endereco): ?>
			<tr>
				<td class="th-produto"><?=$endereco['idendereco']?></td>
				<td class="th-produto"><?=$endereco['logradouro']?></td>
				<td class="th-produto"><?=$endereco['numero']?></td>
				<td class="th-produto"><?=$endereco['complemento']?></td>
				<td class="th-produto"><?=$endereco['bairro']?></td>
				<td class="th-produto"><?=$endereco['cidade']?></td>
				<td class="th-produto"><?=$endereco['cep']?></td>
				<td class="th-produto"><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
				<td class="th-produto"><a href="./endereco/deletar/<?=$endereco['idendereco']?>/<?=$endereco['idusuario']?>">Deletar</a></td>
                                <td class="th-produto"><a href="./endereco/editar/<?=$endereco['idendereco']?>/<?=$endereco['idusuario']?>">Alterar</a></td>
			</tr>
		<?php endforeach; ?>
</table>
   
