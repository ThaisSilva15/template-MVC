<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<h1> Forma de Pagamento </h1>
<form method="POST" action="">
    Descrição: <input type="text" name="descricao" value="<?=@$formapagamento['descricao']?>"><br>
    <button type="submit"> Enviar </button>
</form>
