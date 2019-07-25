<div style="width:100%; min-heigth:500px; padding:10px;">
	<?php foreach ($produtos as $produto):?>
	<div>
		<img src="<?=$produto["imagem"]?>" style="width:40px; heigth:40px;">
		<p><?=$produto["idProduto"]?></p>
		<p><?=$produto["nome"]?></p>
		<p><a href="produto/visualizar/<?=$produto["idProduto"]?>">Ver detalhes</a></p>
	</div>
	<?php endforeach;?>
</div>