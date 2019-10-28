<form action="" method="POST" class="formulario-usuario">
<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?> 
<h1>Escolha sua forma de pagamento </h1>
<select name="idformapagamento" id="pedido" class="formulario-select-option">
        <?php
        foreach ($formapagamento as $fp):
            if ($fp["idformapagamento"] == $fp["idformapagamento"]):?>
                <option value="<?= $fp["idformapagamento"] ?>" selected=""><?= $fp["descricao"] ?></option>
            <?php else: ?>
                <option value="<?= $fp["idformapagamento"] ?>"><?= $fp["descricao"] ?></option>
            <?php endif;
        endforeach;

        ?>
    </select>
<h1> Escolha seu endereço </h1>
<select name="idendereco" id="endereco" class="formulario-select-option">
    <?php
foreach ($enderecos as $endereco):
            if ($endereco["idendereco"] == $endereco["idendereco"]):?>
                <option value="<?= $endereco["idendereco"] ?>" selected=""><?= $endereco["logradouro"] ?></option>
            <?php else: ?>
                <option value="<?= $endereco["idendereco"] ?>"><?= $endereco["logradouro"] ?></option>
            <?php endif;
        endforeach;
 ?>
</select>
<div class="pedido">
    
		<?php $total=0; foreach ($produtos as $produto): ?>
			<div class="produto-lista">
				<img src="<?=$produto['imagem']?>" class="img-carrin">
				<a class="link-carrin" href="produto/ver/<?= $produto["idproduto"] ?>"><?= $produto["nomeproduto"] ?></a>
				<p class="link-carrin">R$ <?= number_format($produto["preco"],2) ?></p>
           
                                <?php
                                $total= $produto ["preco"] + $total;
                                ?>
			</div>
		<?php endforeach; ?>
	</div>
 <div class="total-carrin">
		<p>Total</p> <p>R$ <?= number_format($total,2) ?></p>
    </div>
 <button class="submit-button" type="submit">Salvar pedidos</button>
</form>