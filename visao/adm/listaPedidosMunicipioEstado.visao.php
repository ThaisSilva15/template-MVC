<br><h2>Lista de pedidos por município/estado</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Data Compra</th>
			<th>Total</th>
			<th>Cidade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($adm as $pedido): ?>
			<tr>
	            <td><?=$pedido['datacompra']?></td>
                    <br><td><?=$pedido['total']?></td>
                    <td><?=$pedido['cidade']?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>