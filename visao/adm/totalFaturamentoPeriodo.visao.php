<br><h2>listar Faturamento</h2>
<table class="table" border="1">
	<thead>
		<tr>
                        <th class="th-produto">Período</th>
			<th class="th-produto">Fatura</th>

		</tr>
	</thead>
		<?php foreach ($adm as $faturamento): ?>
			<tr>
                            <td class="th-produto"><?=$faturamento['data']?></td>
                            <td class="th-produto"><?=$faturamento['fatura']?></td>
			</tr>
		<?php endforeach; ?>
	</div>
</table></h2>