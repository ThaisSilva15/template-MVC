<h2> Ver detalhes do cliente </h2><br>
<div class="descricao-produto">
<p class="detalhes-produto">Id Usuário: <?=$cliente ['idUsuario']?> </p><br>
<p class="detalhes-produto">Nome: <?=$cliente ['nomeUsuario']?> </p><br>
<p class="detalhes-produto">Email: <?=$cliente ['email']?> </p><br>
<p class="detalhes-produto">Senha: <?=$cliente ['senha']?> </p><br>
<p class="detalhes-produto">CPF: <?=$cliente ['cpf']?> </p><br>
<p class="detalhes-produto">Data de Nascimento: <?=$cliente ['datadenascimento']?> </p><br>
<p class="detalhes-produto">CPF: <?=$cliente ['cpf']?> </p><br>
<p class="detalhes-produto">Sexo: <?=$cliente ['sexo']?> </p><br>
<p class="detalhes-produto">Tipo Usuário: <?=$cliente ['tipoUsuario']?> </p><br>

<a href="./endereco/adicionar/<?=$cliente['idUsuario']?>" class="botao-produto"> Endereço </a>
<br>

<?php
require_once 'visao/endereco/listar.visao.php';
?>