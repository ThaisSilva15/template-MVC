<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Categorias</h2>
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
                <td><?=$produ['nome']?></td>
                <td><?=$produ['codigo']?></td>
                <td><?=$produ['valor']?></td>
                <td><a href="./produto/ver/<?=$produ['idproduto']?>">Ver</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./produto/adicionar" class="btn btn-primary"> Novo produto</a>
    </body>
</html>