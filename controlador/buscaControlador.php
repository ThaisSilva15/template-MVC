<?php
require_once "modelo/buscaModelo.php";
function pesquisar ( ) {
	if (ehPost( ) ) {
		$buscar = $_POST ["pesquisar"];
		$resultadoBusca = buscar ($buscar);
		$dados ["produtos"] = $resultadoBusca;
                $dados["erros"] = "";
                if(COUNT($resultadoBusca)==0){
                    $dados["erros"] = "Nenhum produto encontrado!!";
                }
		exibir ("busca/pesquisar", $dados);
	} else {
            
	exibir ("busca/pesquisar");
}
}
?>