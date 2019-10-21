<?php
      function pegarTodosPedidos(){
	$sql = "SELECT * FROM pedido";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$pedido[]= $linha;
	}
	return $pedido;
}

function adicionarPedido( $idUsuario, $idedereco, $idformapagamento, $produtos) {
    $sql = "INSERT INTO pedido ( idUsuario, idedereco, idformapagamento, produtos) VALUES ('$idPedido', '$idUsuario', '$idedereco', '$idformapagamento', '$produtos')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar o pedido' . mysqli_error($cnx));
    }
    return 'Pedido cadastrado com sucesso!';
}
?>
    