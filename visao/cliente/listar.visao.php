<h2>Listar Usuarios</h2>
<table class="table" border="1" style="width: 100%;">
	<thead>
		<tr>
			<th class="th-produto">ID</th>
			<th class="th-produto">Nome</th>
			<th class="th-produto">EMAIL</th>
			<th class="th-produto">SENHA</th>
			<th class="th-produto">CPF</th>
			<th class="th-produto">DATA DE NASCIMENTO</th>
			<th class="th-produto">SEXO</th>
			<th class="th-produto">TIPO USUARIO</th>
			<th class="th-produto">VER</th>
			<th class="th-produto">DELETAR</th>
			<th class="th-produto">ALTERAR</th>
		</tr>
	</thead>
		<?php foreach ($clientes as $cliente): ?>
			<tr>
				<td class="th-produto"><?=$cliente['idUsuario']?></td>
				<td class="th-produto"><?=$cliente['nomeUsuario']?></td>
				<td class="th-produto"><?=$cliente['email']?></td>
				<td class="th-produto"><?=$cliente['senha']?></td>
				<td class="th-produto"><?=$cliente['cpf']?></td>
				<td class="th-produto"><?=$cliente['datadenascimento']?></td>
				<td class="th-produto"><?=$cliente['sexo']?></td>
				<td class="th-produto"><?=$cliente['tipoUsuario']?></td>
                                <?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
				<td class="th-produto"><a href="./cliente/ver/<?=$cliente['idUsuario']?>">Ver</a></td>
				<td class="th-produto"><a href="./cliente/deletar/<?=$cliente['idUsuario']?>">Deletar</a></td>
                                 <?php } ?>
                                <td class="th-produto"><a href="./cliente/editar/<?=$cliente['idUsuario']?>">Alterar</a></td>
                                <?php endforeach; ?>
			</tr>

</table>
<a href="./cliente/cadastro" class="btn btn-primary"> Novo cliente </a>        