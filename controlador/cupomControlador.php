<?php

require_once 'servico/validarServico.php';
require_once 'modelo/cupomModelo.php';
require_once 'modelo/produtoModelo.php';

/** ADM */
function cadastro() {
	if (ehPost()) {
		$nomecupom = $_POST ["nomecupom"];
		$desconto = $_POST ["desconto"];
		$errors = array();
		if (valida_vazio($nomecupom, "nomecupom") != NULL) {
			$errors[] = valida_vazio($nomecupom, "nomecupom");
		}
		if (valida_vazio($desconto, "desconto") != NULL) {
			$errors[] = valida_vazio($desconto, "desconto");
		}
		if (count($errors) > 0) {
			$dados = array();
			$dados["errors"] = $errors;
			exibir("cupom/formulario", $dados);
		} else {
			$msg = adicionarCupom($nomecupom, $desconto);
			echo $msg;
			redirecionar("cupom/listarCupom");
		}
	} else {
		exibir("cupom/formulario");
	}
}

/** ADM */
function listarCupom() {
	$dados = array();
	$dados["cupoms"] = pegarTodosCupom();
	exibir("cupom/listar", $dados);
}

/** ADM */
function ver($idcupom){
	$dados ["cupom"] = pegarCupomPorId($idcupom);
	exibir ("cupom/visualizar", $dados);
}

/** ADM */
function deletar($idcupom){
	$msg = deletarCupom($idcupom);
	redirecionar("cupom/listarCupom");
}

/** ADM */
function editar($idcupom) {
	if(ehPost()) {
		$nomecupom = $_POST ["nomecupom"];
		$desconto = $_POST ["desconto"];
		editarCupom($idcupom, $nomecupom, $desconto);
		redirecionar ("cupom/listarCupom");
	}else{
		$dados["cupom"] = pegarCupomPorId($idcupom);
		exibir ("cupom/formulario", $dados);
	}
}

function desconto () {
	if (ehPost()) {
		# variavel recebe o desconto como retorno da função
		$desconto = pegarCupomPorNome ($_POST["cupomDesconto"]);
	} else {
		$desconto = 0;
	}

	$valorTotal = $_SESSION['total'];

	# valorTotal subtrai o desconto
	$valorTotal = $valorTotal - $desconto;

	$dados["produtos"] = $_SESSION["carrinho"];
	$dados["total"] = $valorTotal;

	$_SESSION['total'] = $valorTotal;

	$_SESSION["quantcarrinho"] = 0;

	# se existir a session carirnho
	if (isset($_SESSION["carrinho"])) {
		$produtosCarrinho = array();

		# session carrinho passa para produtoSessao
		foreach ($_SESSION["carrinho"] as $produtoSessao) {
			# quantidade carrinho soma com a quantidade do produto (que está na session)
			$_SESSION["quantcarrinho"] += $produtoSessao["quantidade"];

			# produtoBanco recebe o produto do Banco de dados
			$produtoBanco = pegarProdutoPorId ($produtoSessao["idproduto"]);

			# produto no carrinho recebe o produto do banco
			$produtosCarrinho[] = $produtoBanco;
		}

		$dados["produtos"] = $produtosCarrinho;
		exibir("carrinho/mostrar", $dados);
	} else {
		exibir("carrinho/mostrar", $dados);
	}
}
