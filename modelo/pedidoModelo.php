<?php
      function pegarTodosPedidos (){
	$sql = "SELECT * FROM pedido";
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
?>
    