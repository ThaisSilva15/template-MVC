<?php

function adicionarCategoria($descricao){
	$sql ="INSERT INTO categoria (descricao) VALUES ('$descricao')";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if (!$resultado) { die('Erro ao cadastrar a categoria' . mysqli_error ($cnx));}
	return 'Categoria cadastrado com sucesso!';    
}

function pegarTodasCategorias(){
	$sql = "SELECT * FROM categoria";
	$resultado = mysqli_query(conn(), $sql);
	$categoria = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$categoria[]= $linha;
	}
	return $categoria;
}

function pegarCategoriaPorId($id){
	$sql = "select * from categoria where idcategoria= $id";
	$resultado = mysqli_query(conn(), $sql);
	$categoria = mysqli_fetch_assoc($resultado);
	return $categoria;
}

function deletarCategoria ($id){
	$sql = "DELETE FROM categoria WHERE idcategoria = $id";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if(!$resultado){
		die('Erro ao deletar a categoria' . mysqli_error($cnx));
	}
	return 'Categoria deletado com sucesso!';
}

function editarCategoria($idCategoria, $descricao){
	$sql ="update categoria set  descricao ='$descricao' where idCategoria='$idCategoria'";
	$resultado = mysqli_query($cnx = conn (), $sql);
	if (!$resultado) {die('Erro ao alterar categoria'. mysqli_error($cnx)); }
	return  'Categoria alterado com sucesso!';
}

?>