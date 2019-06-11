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
            <?php foreach ($categoria as $cat): ?>
            <tr>
                <td><?=$cat['idCategoria']?></td>
                <td><?=$cat['descricao']?></td>
                <td><a href="./categoria/ver/<?=$cat['idCategoria']?>">Ver</a></td>
                <td><a href="./categoria/deletar/<?=$cat['idCategoria']?>">Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./categoria/descricao" class="btn btn-primary"> Nova categoria</a>
    </body>
</html>
