h2>Listar Produtos</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Estoque</th>
		</tr>
	</thead>
		<?php foreach ($produtos as $produto): ?>
			<tr>
				<td><?=$produto['nome']?></td>
				<td><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table>
<a href="./produto/cadastro" class="btn btn-primary"> Novo produto </a>
$produto['nome'] $produto['quant_estoque']


