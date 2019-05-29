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
            <?php foreach ($categoria as $categoria): ?>
            <tr>
                <td><?=$categoria['idproduto']?></td>
                <td><?=$categoria['nome']?></td>
                <td><?=$categoria['codigo']?></td>
                <td><?=$categoria['valor']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./produto/descricao" class="btn btn-primary"> Nova categoria</a>
    </body>
</html>