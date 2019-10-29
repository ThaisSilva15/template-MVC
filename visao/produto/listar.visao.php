
<h2>Listar Produtos</h2>
<table class="table" border="1">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>CATEGORIA</th>
            <th>VALOR</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>EST. MÍNIMO</th>
            <th>EST. MÁXIMO</th>
            <th>QUANT_ESTOQUE</th>
            <th>VER</th>
            <th>DELETAR</th>
            <th>ALTERAR</th>
            <th>COMPRAR</th>
        </tr>
    </thead>
</table>
<div class="catalogo">
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><img src="<?= $produto['imagem'] ?>" style="width: 150px; heigth: 150px;"></td>
            <td><?= $produto['idproduto'] ?></td>
            <td><?= $produto['idcategoria'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= $produto['nomeproduto'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['estoque_minimo'] ?></td>
            <td><?= $produto['estoque_maximo'] ?></td>
            <td><?= $produto['quant_estoque'] ?></td>
            <td><a href="produto/ver/<?= $produto['idproduto'] ?>">Ver</a></td>
            <?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
              <td><a href="produto/deletar/<?= $produto['idproduto'] ?>">Deletar</a></td>
              <td><a href="produto/editar/<?= $produto['idproduto'] ?>">Alterar</a></td>
            <?php } ?>
            <td><a href="sacola/adicionar/<?= $produto['idproduto'] ?>">Comprar</a></td>
        </tr>
        <?php endforeach; ?>
</div>
<br>
<?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
	<a href="produto/adicionar" class="btn btn-primary"> Novo produto</a>
<?php } ?>

</div>

