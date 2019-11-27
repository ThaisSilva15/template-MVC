<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<form method="POST" action="" class="formulario-usuario">
    <h1> Cupom </h1>

    <label for="cupom" class="formulario-label">Nome:</label>
    <input id="cupom" class="formulario-input" type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>">

    <label for="desc" class="formulario-label">Desconto:</label>
    <input id="desc" class="formulario-input" type="text" name="desconto" value="<?=@$cupom['desconto']?>">

    <button class="submit-button" type="submit">Enviar</button><br>
</form>

