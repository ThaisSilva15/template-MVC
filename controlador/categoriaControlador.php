<?php

require_once "servico/validacaoServico.php";

require_once "modelo/categoriaModelo.php";

function index(){
	$dados = array();
	$dados['categorias'] = listarCategorias();
	exibir("categoria/index",$dados);
}

function adicionar(){
	if (ehPost()) {
		$nome = $_POST["nome"];
		$msg = adicionarCategoria($nome);
		redirecionar("categoria/index");
	} else {
		exibir("categoria/formulario");
	}
}

function editar($id){
	if (ehPost()) {
		$nome = $_POST["nome"];
		$msg = editarCategoria($id,$nome);
		redirecionar("categoria/index");
	} else {
		exibir("categoria/formulario");
	}
}

function deletar($id){
	$msg = removerCategoria($id);
	redirecionar("categoria/index");
}

function visualizar($id){
	$dados["categoria"] = visualizarCategoria($id);
	exibir("categoria/visualizar",$dados);
}