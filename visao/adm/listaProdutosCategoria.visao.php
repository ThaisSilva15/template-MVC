<br><h2>Listar Produtos por Categoria</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto">Nome</th>
			<th class="th-produto">Categoria</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td class="th-produto"><?=$produto['nomeproduto']?></td><br>
                            <td class="th-produto"><?=$produto['categ']?></td>
			</tr>
		<?php endforeach; ?>
</table>