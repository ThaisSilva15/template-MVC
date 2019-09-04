<div class="col-25">
    <div class="container">
        <h4 style="font-size:30px; color:black">Meu carrinho <span class="price" style="color:black"></span></h4>
        <?php foreach ($produtos as $produto): ?>
            <div class="produto-lista">
                <p><a href="produto/ver/<?= $produto["idproduto"] ?>"><?= $produto["nomeproduto"] ?></a><span class="price">$<?= $produto["preco"] ?></span><a href="sacola/removerproduto/<?= $produto["idproduto"] ?>">X</a></p>
            </div>
            <br>
        <?php endforeach; ?>
        <hr>
        <a href="sacola/limparCarrinho">Limpar Carrinho</a>
        <a href="produto/listarProduto">Continuar Comprando</a>
        <p>Total <span class="price" style="color:black"><b>R$ <?= $subtotal ?></b></span></p>
    </div>
</div>