<?php
if(ehPost()){
	foreach ($errors as $erro){
		echo "$erro<br>";
	}
}
?>

<h1> Cadastro do produto</h1>
<form action="" method="POST">
    Nome do Produto: <input type="text" name="nome" value="<?=@$cliente['nomeproduto']?>">
    Preco: <input type="text" name="nome" value="<?=@$cliente['preco']?>">
    Descricão:  <input type="text" name="nome" value="<?=@$cliente['descricao']?>">
    Imagem: <input type="text" name="nome" value="<?=@$cliente['imagem']?>">
    Estoque Minimo: <input type="text" name="nome" value="<?=@$cliente['estoque_minimo']?>">
    Estoque Maximo: <input type="text" name="nome" value="<?=@$cliente['estoque_maximo']?>">
	<button>Enviar</button>
</form>


