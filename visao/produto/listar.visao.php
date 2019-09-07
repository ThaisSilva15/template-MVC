<div class="catalogo">
    <?php foreach ($produtos as $produto): ?>
        <a class="catalogo-produto" href="produto/ver/<?= $produto['idproduto'] ?>">
            <p class="catalogo-produto-descricao"><?= $produto['nomeproduto'] ?></p>
            <img class="catalogo-produto-imagem" src="<?= $produto['imagem'] ?>">
            <p class="catalogo-produto-descricao"><?= $produto['preco'] ?></p>
        </a>
    <?php endforeach; ?>
</div>
<br>
<a href="produto/adicionar" class="btn btn-primary"> Novo produto</a>