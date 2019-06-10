<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <h2> Ver detalhes do cliente </h2>
        <p> Id: <?=$cliente ['idcliente']?> </p>
        <p>Nome: <?=$cliente ['nome']?> </p>
        <p>Sobrenome: <?=$cliente ['sobrenome']?> </p>
        <p>Email: <?=$cliente ['email']?> </p>
        <p>Senha: <?=$cliente ['senha']?> </p>
        <p>Confirmar Senha: <?=$cliente ['confirmarsenha']?> </p>
        <p>CPF: <?=$cliente ['cpf']?> </p>
        <p>Sexo: <?=$cliente ['sexo']?> </p>
        <p>Data de Nascimento: <?=$cliente ['datadeNascimento']?> </p>
    </body>
</html>

