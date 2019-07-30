<h2>Listar Usuarios</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>EMAIL</th>
			<th>SENHA</th>
			<th>CPF</th>
			<th>DATA DE NASCIMENTO</th>
			<th>SEXO</th>
			<th>TIPO USUARIO</th>
			<th>VER</th>
			<th>DELETAR</th>
		</tr>
	</thead>
		<?php foreach ($clientes as $cliente): ?>
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
<a href="./cliente/cadastro" class="btn btn-primary"> Novo cliente </a>        