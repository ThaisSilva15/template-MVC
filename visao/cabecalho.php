<!-- Cabeçalho original -->
<!-- 
	<nav>
		<ul>
			<li><a href="./">Principal</a></li>
			<li><a href="./usuario">Usuario</a></li>
			<?php //if (acessoUsuarioEstaLogado()): ?>
				<li>Bem vindo <?php //echo acessoPegarUsuarioLogado(); ?></li>
				<li><a href="./login/logout">Sair</a></li>
			<?php //else: ?>
				<li><a href="./login">Entrar</a></li>
			<?php //endif;*/ ?>
		</ul>
	</nav>
-->

<!-- Cabeçalho Principal -->
<div class="header">
	<div class="logotype">
		<a href="." class="logo-store">
            <p class="title">CamiThaMake</p>
			<!-- <img src="publico/header/logo.png" class="logo-store"> -->
		</a>
	</div>
	<div class="client-menu">
		<a class="link-menu" href="cliente/listarUsuarios">Usuário</a>
		<a class="link-menu" href="login/">Login</a>
		<a class="link-menu" href="cliente/ListarClientes">Cadastre-se</a>
		<a class="link-menu" href="carrinho/exibir">Carrinho</a>
                <a class="link-menu" href="categoria/ListarCategorias">Categoria</a>
                <a class="link-menu" href="produto/ListarProduto">Produto</a>
                <a class="link-menu" href="cupom/ListarCupom">Cupom</a>
                <a class="link-menu" href="formapagamento/ListarFormapagamento">Forma de Pagamento</a>
	</div>
</div>