<?php

require_once 'modelo/admModelo.php';
require_once 'modelo/produtoModelo.php';


function listaProdutoseQuantidadedoEstoque() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoEstoque();
	exibir("adm/listaProdutoseQuantidadedoEstoque", $dados);
}

function listaProdutosCategoria() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoeCategoria();
	exibir("adm/listaProdutosCategoria", $dados);
}

function listaPedidosRealizadosDatas() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosDatas($datad1, $datad2); 
		exibir("adm/listaPedidosRealizadosDatas", $dados);
	}else{
		exibir("adm/data");
	} 
}

function listaPedidosMunicipioEstado() {
	$dados = array();
	$dados["adm"] = pegarTodosPedidosMunicipioEstado();
	exibir("adm/listaPedidosMunicipioEstado", $dados);	
}

function totalFaturamentoPeriodo() {
    if (ehPost()){
		$fatu = $_POST ['tipo'];
		$dados = array();
                $dados["adm"] = pegarTodosTotalFaturamamento($fatu);
                exibir("adm/totalFaturamentoPeriodo", $dados);
	}else{
		exibir("adm/faturamento");
	} 
}

