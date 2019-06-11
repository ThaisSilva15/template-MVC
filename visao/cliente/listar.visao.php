<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Usuarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>CPF</th>
                    <th>DATADENASCIMENTO</th>
                    <th>SEXO</th>
                    <th>TIPOUSUARIO</th>
                </tr>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?=$cliente['idUsuario']?></td>
                <td><?=$cliente['nomeUsuario']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['senha']?></td>
                <td><?=$cliente['cpf']?></td>
                <td><?=$cliente['datadenascimento']?></td>
                <td><?=$cliente['sexo']?></td>
                <td><?=$cliente['tipoUsuario']?></td>
                <td><a href="./cliente/ver/<?=$cliente['idUsuario']?>">Ver</a></td>
                <td><a href="./cliente/deletar/<?=$cliente['idUsuario']?>">Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./cliente/cadastro" class="btn btn-primary"> Novo cliente </a>
    </body>
</html>
