<?php
require_once "modelo/produtoModelo.php";

/** anon */
function adicionar($idProduto) {
	// se existir a session carrinho
	if (isset($_SESSION["carrinho"])) {
		// produtos recebe session carrinho, pega o conteúdo dela
		$produtos = $_SESSION["carrinho"];
	} else {
		// produtos recebe um array vazio
		$produtos = [];
	}
	//verificar se existe o produto ja na lista de produtos!
	$chave = existeProdutoNoCarrinho($produtos, $idProduto);
	$produto["quantidade"] = 0; 
	if ($chave === false) {
		$produto = pegarProdutoPorId($idProduto);
		$produto["quantidade"] = 1;
		$produtos[] = $produto;
	} else {
		$produto = $produtos[$chave];
		$produto["quantidade"]++;
		$produtos[$chave] = $produto;
	}
	// produtos na posição dinâmica recebe o produto
	// salva todos os produtos na session carrinho
	$_SESSION["carrinho"] = $produtos;
	// redirecionar para a função de exibição de produtos
	redirecionar("sacola/mostrar");
}

/** anon */
function existeProdutoNoCarrinho($produtos, $idProduto) {
	foreach ($produtos as $chave => $produto) {
		if ($produto["idproduto"] == $idProduto) { //ja existe
			return $chave;
		}
	}
	return false;
}

/** anon */
function mostrar() {
	$total = 0;
	$todos = array();
	if(isset($_SESSION["carrinho"])) {
		$produtos = $_SESSION["carrinho"];
		//print_r($produtos);
		foreach ($produtos as $produto):
			$prod =  pegarProdutoPorId($produto["idproduto"]);
			$todos[] = $prod;
			$total += $prod["preco"];
		endforeach;
	} else {
		echo "Carrinho vazio!";
	}
	$_SESSION['total'] = $total;

	$dados = array();
	$dados["produtos"] = $todos;
	$dados["total"] = $total;
	//print_r($dados);
	exibir('carrinho/mostrar', $dados);
}

/** anon */
function limparCarrinho() {
	unset($_SESSION['carrinho']);
	redirecionar("sacola/mostrar");
}

/** anon */
function removerProduto($id) {
	$produtos = $_SESSION['carrinho'];
	foreach ($produtos as $key => $produto) {
		if ($produto['idproduto'] == $id) {
			unset($produtos[$key]);
		}
	}
	$_SESSION['carrinho'] = $produtos;
	redirecionar("sacola/mostrar");
}
