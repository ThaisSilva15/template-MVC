<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Ver detalhes do Produto </h2>
        <p>Id: <?=$produto ['idproduto']?> </p>
        <p>Categoria: <?=$produto ['idcategoria']?> </p>
        <p>Preço: <?=$produto ['preco']?> </p>
        <p>Nome: <?=$produto ['nomeproduto']?> </p>
        <p>Descricao: <?=$produto ['descricao']?> </p>
        <p>Imagem: <?=$produto ['imagem']?> </p>
        <p>Estoque_minimo: <?=$produto ['estoque_minimo']?> </p>
        <p>Estoque_maximo: <?=$produto ['estoque_maximo']?> </p>
    </body>
</html>

