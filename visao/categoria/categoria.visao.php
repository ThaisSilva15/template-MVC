<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<h1> Categoria </h1><br>
<form method="POST" action="">
    Descrição: <input type="text" name="descricao" value="<?=@$categoria['descricao']?>"><br><br>
    <button type="submit"> Enviar </button><br>
</form>
