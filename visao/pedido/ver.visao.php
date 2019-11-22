Nome: <?= $pedido['nomeUsuario']?><br>
Envio: <?= $pedido['logradouro']?><br>
Pagamento: <?= $pedido['descricao']?>

<br><br>

<?php foreach($produtos as $produto):?>
	<div>
		Produto: <?=$produto['nomeproduto']?><br>
		R$ <?=$produto['preco']?><br>
		Quantidade: <?=$produto['quantidade']?>
	</div>

	<br>
<?php endforeach;?>



<!-- Verificação de amdinistrador -->
<?php if((acessoUsuarioEstaLogado()) && (acessoPegarPapelDoUsuario() == 'admin')):?> 
	<a href="produto/listarProdtuos"></a>
	<a href="usuario/listarUsuarios"></a>
<?php endif;?>