<?php

function adicionarCategoria($nome){
	$sql = "INSERT INTO categoria VALUES(NULL,'$nome')";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die("Erro ao cadastrar categoria. Erro: ".mysqli_error(conn()));
	}
	return 'Categoria cadastrada com sucesso!';
}

function removerCategoria($id){
	$sql = "DELETE FROM categoria WHERE idCategoria = '$id'";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die("Erro ao remover categoria. Erro: ".mysqli_error(conn()));
	}
	return 'Categoria removida com sucesso!';
}

function editarCategoria($id,$nome){
	$sql = "UPDATE categoria SET nome = '$nome' WHERE idCategoria = '$id'";
	$resultado = mysqli_query(conn(),$sql);
	if (!$resultado) {
		die("Erro ao alterar categoria. Erro: ".mysqli_error(conn()));
	}
	return 'Categoria alterada com sucesso!';
}

function listarCategorias(){
	$sql = "SELECT * FROM categoria";
	$resultado = mysqli_query(conn(),$sql);
	$categorias = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$categorias[] = $linha;
	}
	return $categorias;
}

function visualizarCategoria($id){
	$sql = "SELECT * FROM categoria WHERE idCategoria = '$id'";
	$resultado = mysqli_query(conn(),$sql);
	$categoria = mysqli_fetch_assoc($resultado);
	return $categoria;
}

?>