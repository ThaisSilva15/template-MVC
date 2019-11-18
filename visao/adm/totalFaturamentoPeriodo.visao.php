<br><h2>Total do faturamento por periodo semanal/mensal/anual)</h2>
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

