<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<h1> Categoria </h1>
<form method="POST" action="">
    Descrição: <input type="text" name="descricao">
    <button type="submit"> Enviar </button>
</form>