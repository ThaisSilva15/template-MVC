<?php

define('ACESSO', true);

function acessoLogar($cliente) {
	if(!empty($cliente)) {
		$_SESSION["acesso"] = array(
			"email" => $cliente["email"], 
			"papel" => $cliente["papel"]
		);
		return true; 
	}
	return false;
}

function acessoDeslogar() {
	if (isset($_SESSION["acesso"])) {
		$_SESSION["acesso"] = null;
		unset($_SESSION["acesso"]);
	}
}

function acessoUsuarioEstaLogado() {
	return isset($_SESSION["acesso"]);
}

function acessoPegarPapelDoUsuario() {
	if (acessoUsuarioEstaLogado()) {
		return $_SESSION["acesso"]["papel"];
	}
}

function acessoPegarUsuarioLogado() {
	if (acessoUsuarioEstaLogado()) {
		return $_SESSION["acesso"]["email"];
	}   
}

?>