<div class="banner">
</div>

<div class="catalogo">
    <?php foreach ($produtos as $produto): ?>
        <div>
            <a class="catalogo-produto" href="produto/ver/<?= $produto['idproduto'] ?>">
                <p class="catalogo-produto-descricao"><?= $produto['nomeproduto'] ?></p>
                <img class="catalogo-produto-imagem" src="<?= $produto['imagem'] ?>">
                <p class="catalogo-produto-descricao">R$ <?= number_format($produto['preco'],2) ?></p>
            </a>
        </div>
        <br>
    <?php endforeach; ?>
</div>

<div class="base-box">
    <?php //foreach ($variable as $key => $value):?>
    <div>
        <!--seleção de cor da base-->
    </div>
    <?php // endforeach;?>
</div>