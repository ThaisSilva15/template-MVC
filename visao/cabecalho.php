<div class="header">
    <div class="logotype">
        <a href="." class="logo-store">
            <p class="title">CamiThaMake</p>
        </a>
    </div>
    <div class="client-menu">
        <!-- colocar a funcao no usuario modelo acessoPegarUsuarioLogado(); -->
        <?php if (isset($_SESSION['usuario'])): ?>
            <a class="link-menu" href="cliente/ver/1">Usuario</a>
            <a class="link-menu" href="login/logout">Logout</a>
        <?php else: ?>
            <a class="link-menu" href="login/">Login</a>
            <a class="link-menu" href="cliente/cadastro">Cadastre-se</a>
        <?php endif; ?>
        <a class="link-menu" href="sacola/mostrar">Carrinho</a>
    </div>
</div>