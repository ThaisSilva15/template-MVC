<?php

function pegarTodosPedidos (){
	$sql = "SELECT p.*, u.*, fp.*, e.* 
			FROM pedido p
			INNER JOIN formapagamento fp
			ON p.idformapagamento = fp.idformapagamento
			INNER JOIN usuario u
			ON p.idusuario = u.idUsuario
			INNER JOIN endereco e
			ON u.idUsuario = e.idusuario";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$pedido[]= $linha;
	}
	return $pedido;
}

function selecionarPedido ($id){
	$sql = "SELECT p.*, u.*, fp.*, e.* 
			FROM pedido p
			INNER JOIN formapagamento fp
			ON p.idformapagamento = fp.idformapagamento
			INNER JOIN usuario u
			ON p.idusuario = u.idUsuario
			INNER JOIN endereco e
			ON u.idUsuario = e.idusuario
			WHERE idPedido = '$id'";
	$resultado = mysqli_query(conn(), $sql);
    $pedido = mysqli_fetch_assoc($resultado);
    return $pedido;
}

function selecionarPedidoProdutos ($id){
	$sql = "SELECT *
			FROM pedido_produto
			WHERE idpedido = '$id'";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$pedido[]= $linha;
	}
	return $pedido;
}

function adicionarPedido( $idUsuario, $idedereco, $idformapagamento, $produtos) {
	$data = date("Y-m-d");
	$sql = "INSERT INTO pedido ( idUsuario, idendereco, idformapagamento, datacompra) VALUES ('$idUsuario', '$idedereco', '$idformapagamento', '$data')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		die('Erro ao cadastrar o pedido' . mysqli_error($cnx));
	} 
	$idpedido = mysqli_insert_id($cnx);
	 foreach ($produtos as $produto){
			$idproduto= $produto['idproduto'];
		   $sql = "INSERT INTO pedido_produto ( idproduto, idpedido, quantidade) VALUES ('$idproduto', '$idpedido', '1')";

		  $resultado = mysqli_query($cnx = conn(), $sql);
		  if (!$resultado) {
			  die('Erro ao cadastrar o pedido' . mysqli_error($cnx));
		  } 
	  }
	return 'Pedido cadastrado com sucesso!';
}
