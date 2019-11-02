<div class="header">
    <div class="logotype">
        <a href="." class="logo-store">
            <p class="title">CamiThaMake</p>
        </a>
    </div>
    <div class="client-menu">
        <div class="dropdown">
            <button class="dropbtn">Buscar</button>
            <form action="produto/buscar" method="POST" class="dropdown-content">
                <input class="input-busca" type="text" name="busca" class="input-busca">
                <button class="button-busca" type="submit" class="botao-busca">Buscar</button>
            </form>
        </div>
        <?php if (acessoUsuarioEstaLogado()): ?>
            <a class="link-menu" href="cliente/ver/<?= acessoPegarUsuarioLogado() ?>">Minha Conta</a>
            <a class="link-menu" href="login/logout">Logout</a>
        <?php else: ?>
            <a class="link-menu" href="login/">Login</a>
            <a class="link-menu" href="cliente/cadastro">Cadastrar</a>
        <?php endif; ?>
        <a class="link-menu" href="sacola/mostrar">Carrinho</a>
    </div>
</div>