<?php
if (ehPost()) {
	foreach ($errors as $erro) {
		echo "$erro<br>";
	}
}
?>
<h1> Forma de Pagamento </h1><br>
<form method="POST" action="">
	<br> Descrição: <input type="text" name="descricao" value="<?=@$formapagamento['descricao']?>"><br>
	<br><button type="submit"> Enviar </button><br>
</form>
