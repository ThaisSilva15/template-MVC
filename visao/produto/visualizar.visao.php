<img src="<?=$produto ['imagem']?>"><br>
<h2> Ver detalhes do Produto </h2><br>
<p>Id: <?=$produto ['idproduto']?> </p><br>
<p>Categoria: <?=$produto ['idcategoria']?> </p><br>
<p>Preço: <?=$produto ['preco']?> </p><br>
<p>Nome: <?=$produto ['nomeproduto']?> </p><br>
<p>Descricao: <?=$produto ['descricao']?> </p><br>
<p>Estoque_minimo: <?=$produto ['estoque_minimo']?> </p><br>
<p>Estoque_maximo: <?=$produto ['estoque_maximo']?> </p><br>
<p>Estoque: <?=$produto ['quant_estoque']?> </p><br>
<a href="produto/listarProduto">Voltar</a><br><br>
<a href="sacola/adicionar/<?= $produto['idproduto'] ?>">Comprar</a><br>