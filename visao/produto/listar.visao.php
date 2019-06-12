<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Produtos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CODIGO</th>
                    <th>VALOR</th>
                </tr>
            </thead>
            <?php foreach ($produto as $produ): ?>
            <tr>
                <td><?=$produ['idproduto']?></td>
                <td><?=$produ['idcategoria']?></td>
                <td><?=$produ['preco']?></td>
                <td><?=$produ['nomeproduto']?></td>
                <td><?=$produ['descricao']?></td>
                <td><?=$produ['imagem']?></td>
                <td><?=$produ['estoque_minimo']?></td>
                <td><?=$produ['estoque_maximo']?></td>
                <td><a href="./produto/ver/<?=$produ['idproduto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produ['idproduto']?>">Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./produto/adicionar" class="btn btn-primary"> Novo produto</a>
    </body>
</html>
