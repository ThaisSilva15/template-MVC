<div class="carrin">
	<h4 class="titulo-carrin">Meu carrinho</h4>

	<div class="pedido">
		<?php foreach ($produtos as $produto): ?>
			<div class="produto-lista">
				<img src="<?=$produto['imagem']?>" class="img-carrin">
				<a class="link-carrin" href="produto/ver/<?= $produto["idproduto"] ?>"><?= $produto["nomeproduto"] ?></a>
				<p class="link-carrin">R$ <?= number_format($produto["preco"],2) ?></p>
				<a class="link-carrin" href="sacola/removerProduto/<?= $produto["idproduto"] ?>">Remover</a>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="operacoes-carrin">
		<a href="sacola/limparCarrinho" class="link-carrin" style="margin-right: 50px;">Limpar Carrinho</a>
		<a href="produto/listarProduto" class="link-carrin" style="margin-right: 50px;">Continuar Comprando</a>
                <a href="pedido/salvarPedido" class="link-carrin">Finalizar Pedido</a>
	</div>

	<div class="total-carrin">
		<p>Total</p> <p>R$ <?= number_format($_SESSION['total'],2) ?></p>
	</div>
</div>

<form action="cupom/desconto/" method="POST" class="form-cupom">
    <div class="cupom">
        <label for="desconto"><h2>Possui Cupom?</h2></label>&nbsp;
        <input class="inp-cupom" type="text" name="cupomDesconto" id="desconto">&nbsp;
        <button class="btn-cupom" type="submit">Verificar</button>
    </div>
</form>