<form action="" method="POST" class="formulario-usuario">
    <h1 align="center">Cadastre-se</h1>
    
    <label class="formulario-label" for="nome">
        Nome Completo <?php if(isset($errors['nome'])): echo "(".$errors['nome'].")"; endif;?>
    </label>
    <input class="formulario-input" id="nome" type="text" name=" nomeUsuario">


    <label class="formulario-label" for="email">
        Email <?php if(isset($errors['email'])): echo "(".$errors['email'].")"; endif;?>
    </label>
    <input class="formulario-input" id="email" type="text" name="email">


    <label class="formulario-label" for="senha">
        Senha <?php if(isset($errors['senha'])): echo "(".$errors['senha'].")"; endif;?>
    </label>
    <input class="formulario-input" id="senha" type="password" name="senha">


    <label class="formulario-label" for="cpf">
        CPF <?php if(isset($errors['cpf'])): echo "(".$errors['cpf'].")"; endif;?>
    </label>
    <input class="formulario-input" id="cpf" type="text" name="CPF">


    <label class="formulario-label">
        Data de Nacimento <?php if(isset($errors['data'])): echo "(".$errors['data'].")"; endif;?>
    </label>
    <div class="formulario-select">
        <select name="dia" class="formulario-select-option">
            <option value="default">Dia</option>
            <?php for ($dia = 1; $dia <= 31 ; $dia++):?>
                <option value="<?=$dia?>"><?=$dia?></option>
            <?php endfor;?>
        </select>
        <select name="mes" class="formulario-select-option">
            <option value="default">Mês</option>
            <?php for ($mes = 1; $mes <= 12 ; $mes++):?>
                <option value="<?=$mes?>"><?=$mes?></option>
            <?php endfor;?>
        </select>
        <select name="ano" class="formulario-select-option">
            <option value="default">Ano</option>
            <?php for ($ano = date('Y'); $ano >= 1960 ; $ano--):?>
                <option value="<?=$ano?>"><?=$ano?></option>
            <?php endfor;?>
        </select>
    </div>


    <label class="formulario-label">Sexo</label>
    <div class="sexo-usuario">
        <input type="radio" name="sexo" value="M" id="man" checked="">
        <label class="selecionar-sexo-usuario" for="man">Masculino</label>

        <input type="radio" name="sexo" value="F" id="woman">
        <label class="selecionar-sexo-usuario" for="woman">Feminino</label>
    </div>
    
    <label class="formulario-label">Tipo Usuário</label>
    <div class="tipo-usuario">
        <input type="radio" name="tipoUsuario" value="ADM" id="man" checked="">
        <label class="selecionar-tipo-usuario" for="ADM">Adimistrador</label>

        <input type="radio" name="tipoUsuario" value="USER" id="woman">
        <label class="selecionar-tipo-usuario" for="USER">Usuario</label>
    </div>

    <button class="submit-button" type="submit">Cadastrar</button>
    <p align="center">Já possui um cadastro? <a href="login/" style="color: #000000;">Entre</a></p>
</form>