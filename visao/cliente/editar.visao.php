<form action="" method="POST" class="formulario-usuario">
    <h1 align="center">Atualize</h1>
    <label class="formulario-label" for="nome">
        Nome Completo <?php if(isset($errors['nome'])): echo "(".$errors['nome'].")"; endif;?>
    </label>
    <input class="formulario-input" id="nome" type="text" name=" nomeUsuario" value="<?= $cliente['nomeUsuario'] ?>">


    <label class="formulario-label" for="email">
        Email <?php if(isset($errors['email'])): echo "(".$errors['email'].")"; endif;?>
    </label>
    <input class="formulario-input" id="email" type="text" name="email" value="<?= $cliente['email'] ?>">


    <label class="formulario-label" for="senha">
        Senha <?php if(isset($errors['senha'])): echo "(".$errors['senha'].")"; endif;?>
    </label>
    <input class="formulario-input" id="senha" type="text" name="senha" value="<?= $cliente['senha'] ?>">


    <label class="formulario-label" for="cpf">
        CPF <?php if(isset($errors['cpf'])): echo "(".$errors['cpf'].")"; endif;?>
    </label>
    <input class="formulario-input" id="cpf" type="text" name="CPF" value="<?= $cliente['cpf'] ?>">


    <label class="formulario-label">
        Data de Nascimento <?php if(isset($errors['data'])): echo "(".$errors['data'].")"; endif;?>
    </label>
    <?php $nascimento = explode('-',$cliente['datadenascimento']);?>
    <div class="formulario-select">
        <select name="dia" class="formulario-select-option">
            <option value="<?=$nascimento[2]?>"><?=$nascimento[2]?></option>
            <?php for ($dia = 1; $dia <= 31 ; $dia++):?>
                <option value="<?=$dia?>"><?=$dia?></option>
            <?php endfor;?>
        </select>
        <select name="mes" class="formulario-select-option">
            <option value="<?=$nascimento[1]?>"><?=$nascimento[1]?></option>
            <?php for ($mes = 1; $mes <= 12 ; $mes++):?>
                <option value="<?=$mes?>"><?=$mes?></option>
            <?php endfor;?>
        </select>
        <select name="ano" class="formulario-select-option">
            <option value="<?=$nascimento[0]?>"><?=$nascimento[0]?></option>
            <?php for ($ano = date('Y'); $ano >= 1960 ; $ano--):?>
                <option value="<?=$ano?>"><?=$ano?></option>
            <?php endfor;?>
        </select>
    </div>


    <label class="formulario-label">Sexo</label>
    <?php if ($cliente["sexo"] == "M"): ?>
    <div class="sexo-usuario">
        <input type="radio" name="sexo" value="M" id="man" checked="">
        <label class="selecionar-sexo-usuario" for="man">Masculino</label>

        <input type="radio" name="sexo" value="F" id="woman">
        <label class="selecionar-sexo-usuario" for="woman">Feminino</label>
    </div>
    <?php else: ?>
    <div class="sexo-usuario">
        <input type="radio" name="sexo" value="M" id="man">
        <label class="selecionar-sexo-usuario" for="man">Masculino</label>

        <input type="radio" name="sexo" value="F" id="woman" checked="">
        <label class="selecionar-sexo-usuario" for="woman">Feminino</label>
    </div>
    <?php endif; ?>
    <label class="formulario-label">Tipo Usuário</label>
    <?php if ($cliente["tipoUsuario"] == "M"): ?>
    <div class="tipo-usuario">
        <input type="radio" name="tipoUsuario" value="Adminstrador" id="man" checked="">
        <label class="selecionar-tipo-usuario" for="Adminstrador">Adminstrador</label>

        <input type="radio" name="tipoUsuario" value="Usuario" id="woman">
        <label class="selecionar-tipo-usuario" for="Usuario">Usuario</label>
    </div>
    <?php else: ?>
    <div class="sexo-usuario">
        <input type="radio" name="tipoUsuario" value="adimistradorr" id="man">
        <label class="selecionar-sexo-usuario" for="adimistrador">adimistrador</label>

        <input type="radio" name="tipoUsuario" value="Usuario" id="woman" checked="">
        <label class="selecionar-sexo-usuario" for="Usuario">Usuario</label>
    </div>
    <?php endif; ?>

    <button class="submit-button" type="submit">Atualizar</button>
    <p align="center">Já possui um cadastro? <a href="login/" style="color: #000000;">Entre</a></p>
</form>