<br><h2>Lista de pedidos por município/estado</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>Cidade</th>
			<th>Quantidade de Pedidos</th>
			<th>Detalhes</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($adm as $pedido): ?>
			<tr>
	            <td><?=$pedido['cidade']?></td><br>
                <td><?=$pedido['quant']?></td>
                <td><a href="adm/visualizarPedidosPorCidade/<?=$pedido['idendereco']?>">Ver mais</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>