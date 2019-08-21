<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<h1> Cupom </h1>
<form method="POST" action="">
    Nome do Cupom: <input type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>"><br>
    Desconto: <input type="text" name="desconto" value="<?=@$cupom['desconto']?>"><br>
    <button type="submit"> Enviar </button>
</form>

