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
                    <th>DESCRICAO</th>   
                </tr>
            </thead>
            <?php foreach ($categoria as $categoria): ?>
            <tr>
                <td><?=$categoria['idCategoria']?></td>
                <td><?=$categoria['descricao']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./categoria/descricao" class="btn btn-primary"> Nova categoria</a>
    </body>
</html>
