<h2 align="center">Listar Produtos</h2>
<table class="table" border="1" style="width: 100%;">
    <thead>
        <tr>
            <th class="th-produto">ID</th>
            <th class="th-produto">IMAGEM</th>
            <th class="th-produto">NOME</th>
            <th class="th-produto">VALOR</th>
            <th class="th-produto">CATEGORIA</th>
            <th class="th-produto">EST. MÍNIMO</th>
            <th class="th-produto">EST. MÁXIMO</th>
            <th class="th-produto">QUANT_ESTOQUE</th>
            <th class="th-produto">VER</th>
            <th class="th-produto">DELETAR</th>
            <th class="th-produto">ALTERAR</th>
            <th class="th-produto">COMPRAR</th>
        </tr>
    </thead>

<div class="catalogo">
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td class="th-produto"><img src="<?= $produto['imagem'] ?>" style="width: 150px; heigth: 150px;"></td>
            <td class="th-produto"><?= $produto['idproduto'] ?></td>
            <td class="th-produto"><?= $produto['nomeproduto'] ?></td>
            <td class="th-produto"><?= $produto['preco'] ?></td>
            <td class="th-produto"><?= $produto['idcategoria'] ?></td>
            <td class="th-produto"><?= $produto['estoque_minimo'] ?></td>
            <td class="th-produto"><?= $produto['estoque_maximo'] ?></td>
            <td class="th-produto"><?= $produto['quant_estoque'] ?></td>
            <td class="th-produto"><a href="produto/ver/<?= $produto['idproduto'] ?>">Ver</a></td>
            <?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
              <td class="th-produto"><a href="produto/deletar/<?= $produto['idproduto'] ?>">Deletar</a></td>
              <td class="th-produto"><a href="produto/editar/<?= $produto['idproduto'] ?>">Alterar</a></td>
            <?php } ?>
            <td class="th-produto"><a href="sacola/adicionar/<?= $produto['idproduto'] ?>">Comprar</a></td>
        </tr>
    <?php endforeach; ?>
</div>
</table>
<br>
<?php if (acessoPegarPapelDoUsuario() == "ADM") { ?>
<a href="produto/adicionar" class="btn btn-primary"><p align="center">Novo produto</p></a>
<?php } ?>
