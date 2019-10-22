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
    $sql = "INSERT INTO pedido ( idUsuario, idedereco, idformapagamento) VALUES ('$idUsuario', '$idedereco', '$idformapagamento')";
    $idpedido = mysqli_insert_id($cnx);
     foreach ($produtos as $produto): 
      $idproduto= $produto['idproduto'];
     $sql = "INSERT INTO pedido_produto ( idproduto, idpedido, quantidade) VALUES ('$idproduto', '$idpedido', '1')";
        endforeach; 
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar o pedido' . mysqli_error($cnx));
    }
    return 'Pedido cadastrado com sucesso!';
}
?>
    