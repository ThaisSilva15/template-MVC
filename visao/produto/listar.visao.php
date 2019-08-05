<h2>Listar Produtos</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>CATEGORIA</th>
			<th>NOME</th>
			<th>VALOR</th>
			<th>DESCRIÇÃO</th>
			<th>IMAGEM</th>
			<th>EST. MÍNIMO</th>
			<th>EST. MÁXIMO</th>
			<th>VER</th>
			<th>DELETAR</th>
		</tr>
	</thead>
	<?php foreach ($produto as $produ): ?>
		<tr>
			<td><?=$produ['idproduto']?></td>
			<td><?=$produ['idcategoria']?></td>
			<td><?=$produ['nomeproduto']?></td>
			<td><?=$produ['preco']?></td>
			<td><?=$produ['descricao']?></td>
			<td><?=$produ['imagem']?></td>
			<td><?=$produ['estoque_minimo']?></td>
			<td><?=$produ['estoque_maximo']?></td>
			<td><a href="./produto/ver/<?=$produ['idproduto']?>">Ver</a></td>
			<td><a href="./produto/deletar/<?=$produ['idproduto']?>">Deletar</a></td>
                        <td><a href="./produto/editar/<?=$produ ['idproduto']?>">Alterar</a></td>

		</tr>
	<?php endforeach; ?>
</table>
<a href="./produto/adicionar" class="btn btn-primary"> Novo produto</a>