<?php
if(ehPost()){
	foreach ($errors as $erro){
		echo "$erro<br>";
	}
}
?>

<h1> Cadastro do produto</h1>
<form action="" method="POST">
	Nome do Produto: <input type="text" name="nomeproduto"><br>
	Preco: <input type="text" name="preco"><br>
	Descricão: <input type="text" name="descricao"><br>
	Imagem: <input type="text" name="imagem"><br>
	Estoque Minimo: <input type="text" name="estoque_minimo"><br>
	Estoque Maximo: <input type="text" name="estoque_maximo"><br>
	<button>Enviar</button>
</form>


