<br><h2>Lista de pedidos por município/estado</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Estoque</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td><?=$produto['nomeproduto']?></td><br>
                            <td><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table>