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
?>
    