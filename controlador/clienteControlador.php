<?php

require_once "servico/validacaoServico.php";

require_once "modelo/clienteModelo.php";

function index(){
	$dados=array();
	$dados["clientes"]= listarClientes();
	exibir("cliente/index",$dados);
}

function adicionar(){
	if (ehPost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nascimento = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];
		$sexo = $_POST["sexo"];

		$msg = adicionarCliente($nome,$email,$senha,$cpf,$nascimento,$sexo,"usr");

		redirecionar("cliente/");
	} else {
		exibir("cliente/formulario");
	}
}

function editar($id){
	if (ehPost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nascimento = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];
		$sexo = $_POST["sexo"];

		$msg = editarCliente($id,$nome,$email,$senha,$cpf,$nascimento,$sexo,"usr");

		redirecionar("cliente/");
	} else {
		exibir("cliente/formulario");
	}
}

function deletar($id){
	$msg = deletarCliente($id);
	redirecionar("cliente/");
}

function visualizar($id){
	$dados=array();
	$dados["cliente"]= visualizarCliente($id);
	exibir("cliente/visualizar",$dados);
}
?>