<br><h2>listar Pedidos por Datas</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Data da Compra</th>
			<th>Total</th>
		</tr>
	</thead>
		<?php foreach ($adm as $data): ?>
			<tr>
                            <td><?=$data['datacompra']?></td><br>
                            <td><?=$data['total']?></td>
			</tr>
		<?php endforeach; ?>
	</div>
</table></h2>