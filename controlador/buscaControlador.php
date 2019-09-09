<?php
require_once "modelo/buscaModelo.php";
function pesquisar ( ) {
	if (ehPost( ) ) {
		$buscar = $_POST ["pesquisar"];
		$resultadoBusca = buscar ($buscar);
		$dados ["produtos"] = $resultadoBusca;
		exibir ("busca/pesquisar", $dados);
	} else {
	exibir ("busca/pesquisar");
}
}
