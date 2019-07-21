<?php

require_once "servico/validacaoServico.php";
require_once "servico/uploadServico.php";

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

function index(){
	$dados = array();
	$dados['produtos'] = listarProdutos();
	exibir("produto/index",$dados);
}

function adicionar(){
	if (ehPost()) {
		$categoria = $_POST['categoria'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$imagem = $_POST['imagem'];
		$est_min = $_POST['est_min'];
		$est_max = $_POST['est_max'];

		$msg = adicionarProduto($categoria, $nome, $preco, $descricao, $imagem, $est_min, $est_max);

		redirecionar("produto/index");
	} else {
		$dados = array();
		$dados["categorias"] = listarCategorias();
		exibir("produto/formulario",$dados);
	}
}

function editar($id){
	if (ehPost()) {
		$categoria = $_POST['categoria'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$imagem = $_POST['imagem'];
		$est_min = $_POST['est_min'];
		$est_max = $_POST['est_max'];
		
		$msg = editarProduto($id,$categoria, $nome, $preco, $descricao, $imagem, $est_min, $est_max);

		redirecionar("produto/index");
	} else {
		$dados = array();
		$dados["categorias"] = listarCategorias();
		exibir("produto/formulario",$dados);
	}
}

function visualizar($id){
	$dados["produto"] = visualizarProduto($id);
	exibir("produto/visualizar",$dados);
}

function deletar($id){
	$msg = deletarProduto($id);
	redirecionar("produto/index");
}

?>