<div class="header">
    <div class="logotype">
        <a href="." class="logo-store">
            <p class="title">CamiThaMake</p>
        </a>
    </div>
    <div class="client-menu">
        <!-- acessoPegarUsuarioLogado(); -->
        <?php 
        function acessoPegarUsuarioLogado(){
            return false;
        }
        // retirar essa função e colocar a original
        if (acessoPegarUsuarioLogado()): ?>
            <a class="link-menu" href="cliente/ver/1">Usuario</a>
            <a class="link-menu" href="login/logout">Logout</a>
        <?php else: ?>
            <a class="link-menu" href="login/">Login</a>
            <a class="link-menu" href="cliente/cadastro">Cadastrar</a>
        <?php endif; ?>
        <a class="link-menu" href="sacola/mostrar">Carrinho</a>
    </div>
</div>