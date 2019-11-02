<h2> Ver detalhes do cliente </h2>
<br>
<p>Id Usuário: <?=$cliente ['idUsuario']?> </p><br>
<p>Nome: <?=$cliente ['nomeUsuario']?> </p><br>
<p>Email: <?=$cliente ['email']?> </p><br>
<p>Senha: <?=$cliente ['senha']?> </p><br>
<p>CPF: <?=$cliente ['cpf']?> </p><br>
<p>Data de Nascimento: <?=$cliente ['datadenascimento']?> </p><br>
<p>CPF: <?=$cliente ['cpf']?> </p><br>
<p>Sexo: <?=$cliente ['sexo']?> </p><br>
<p>Tipo Usuário: <?=$cliente ['tipoUsuario']?> </p><br>

<a href="./endereco/adicionar/<?=$cliente['idUsuario']?>"> Endereço </a>
<br>

<?php
require_once 'visao/endereco/listar.visao.php';
?>