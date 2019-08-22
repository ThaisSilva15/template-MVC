<?php

function adicionarFormapagamento($descricao){
	$sql ="INSERT INTO formapagamento (descricao) VALUES ('$descricao')";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if (!$resultado) { die('Erro ao cadastrar a formapagamento' . mysqli_error ($cnx));}
	return 'Formapagamento cadastrado com sucesso!';    
}

function pegarTodasFormapagamento(){
	$sql = "SELECT * FROM formapagamento";
	$resultado = mysqli_query(conn(), $sql);
	$formapagamento = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$formapagamento[]= $linha;
	}
	return $formapagamento;
}

function pegarFormapagamentoPorId($id){
	$sql = "select * from formapagamento where idformapagamento= $id";
	$resultado = mysqli_query(conn(), $sql);
	$formapagamento = mysqli_fetch_assoc($resultado);
	return $formapagamento;
}

function deletarFormapagamento ($id){
	$sql = "DELETE FROM formapagamento WHERE idformapagamento = $id";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if(!$resultado){
		die('Erro ao deletar a formapagamento' . mysqli_error($cnx));
	}
	return 'Formapagamento deletado com sucesso!';
}

function editarFormapagamento($idformapagamento, $descricao){
	$sql ="update formapagamento set  descricao ='$descricao' where idformapagamento='$idformapagamento'";
	$resultado = mysqli_query($cnx = conn (), $sql);
	if (!$resultado) {die('Erro ao alterar formapagamento'. mysqli_error($cnx)); }
	return  'Formapagamento alterado com sucesso!';
}

?>