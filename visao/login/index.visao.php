<form action="" method="POST" class="formulario-usuario">
    <h1 align="center" style="margin-bottom: 20px;">Acesse o sistema</h1>

    <?php if (isset($error)): ?>
        <div class="login-error">
            <p><?= $error ?></p>
        </div>
    <?php endif; ?>

    <label class="formulario-label" for="email">Email</label>
    <input class="formulario-input" id="email" type="email" name="email">

    <label class="formulario-label" for="senha">Senha</label>
    <input class="formulario-input" id="senha" type="password" name="senha" >

    <button class="submit-button" type="submit">Entrar</button>
    <p align="center">Ainda não possui uma conta? <a href="cliente/cadastro" style="color: #000000;">Cadastre-se</a></p>
</form>