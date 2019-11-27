<div class="visualizar-produto">
    <img src="<?=$produto ['imagem']?>" class="imagem-produto">

    <div class="descricao-produto">
        <h1 class="title-produto"><?=$produto ['nomeproduto']?></h1>
        <p class="detalhes-produto">Código (<?=$produto ['idproduto']?>)</p>
        <p class="detalhes-produto">Categoria: <?=$produto ['idcategoria']?> </p>
        <p class="detalhes-produto">Preço: R$ <?=number_format($produto ['preco'], 2, ',', '.')?> </p>
        <p class="detalhes-produto"> Descrição: <?=$produto ['descricao']?> </p>
        <p class="detalhes-produto"> Estoque_minimo: <?=$produto ['estoque_minimo']?> </p>
        <p class="detalhes-produto">Estoque_maximo: <?=$produto ['estoque_maximo']?> </p>
        <p class="detalhes-produto">Estoque: <?=$produto ['quant_estoque']?> </p>
            <a href="sacola/adicionar/<?= $produto['idproduto'] ?>" class="botao-produto">Comprar</a>
    </div>
</div>
<br><br>
<a href="produto/listarProduto" class="botao-produto-voltar"><p align="center">Voltar</p></a>
            