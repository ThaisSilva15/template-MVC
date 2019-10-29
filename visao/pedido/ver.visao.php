Nome: <?= $pedido['nomeUsuario']?><br>
Envio: <?= $pedido['logradouro']?><br>
Pagamento: <?= $pedido['descricao']?>

<br><br>

<?php foreach($produtos as $produto):?>
	<div>
		IdProduto: <?=$produto['idproduto']?><br>
		Quantidade: <?=$produto['quantidade']?>
	</div>

	<br>
<?php endforeach;?>