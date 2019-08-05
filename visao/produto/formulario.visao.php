<?php
if(ehPost()){
	foreach ($errors as $erro){
		echo "$erro<br>";
	}
}
?>

<h1> Cadastro do produto</h1>
<form action="" method="POST">
    Nome do Produto: <input type="text" name="nomeproduto" value="<?=@$produto['nomeproduto']?>">
    Preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    Descricão:  <input type="text" name="descricao" value="<?=@$produto['descricao']?>">
    Imagem: <input type="text" name="imagem" value="<?=@$produto['imagem']?>">
    Estoque Minimo: <input type="text" name="estoque_minimo" value="<?=@$produto['estoque_minimo']?>">
    Estoque Maximo: <input type="text" name="estoque_maximo" value="<?=@$produto['estoque_maximo']?>">
	<button>Enviar</button>
</form>


