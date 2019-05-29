<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Clientes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>SOBRENOME</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>CONFIRMARSENHA</th>
                    <th>CPF</th>
                    <th>SEXO</th>
                    <th>DATADENASCIMENTO</th>
                </tr>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?=$cliente['idcliente']?></td>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['sobrenome']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['senha']?></td>
                <td><?=$cliente['confirmarsenha']?></td>
                <td><?=$cliente['cpf']?></td>
                <td><?=$cliente['sexo']?></td>
                <td><?=$cliente['datadeNascimento']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="./cliente/cadastro" class="btn btn-primary"> Novo cliente</a>
    </body>
</html>
