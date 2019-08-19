<h2>Listar Endereco</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>LOGRADOURO</th>
			<th>NUMERO</th>
			<th>COMPLEMENTO</th>
			<th>BAIRRO</th>
			<th>CIDADE</th>
			<th>CEP</th
			<th>VER</th>
			<th>DELETAR</th>
			<th>ALTERAR</th>
		</tr>
	</thead>
		<?php foreach ($enderecos as $endereco): ?>
			<tr>
				<td><?=$cliente['idUsuario']?></td>
				<td><?=$cliente['nomeUsuario']?></td>
				<td><?=$cliente['email']?></td>
				<td><?=$cliente['senha']?></td>
				<td><?=$cliente['cpf']?></td>
				<td><?=$cliente['datadenascimento']?></td>
				<td><?=$cliente['sexo']?></td>
				<td><?=$cliente['tipoUsuario']?></td>
				<td><a href="./cliente/ver/<?=$cliente['idUsuario']?>">Ver</a></td>
				<td><a href="./cliente/deletar/<?=$cliente['idUsuario']?>">Deletar</a></td>
                                <td><a href="./cliente/editar/<?=$cliente['idUsuario']?>">Alterar</a></td>
			</tr>
		<?php endforeach; ?>
</table>
<a href="./endereco/cadastro" class="btn btn-primary"> Novo Endereco </a>        
