<?php

function pegarTodosProdutoEstoque() {
	$sql = "select * from produtos";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function pegarTodosProdutoeCategoria() {
	$sql = "select produtos.nomeproduto, categoria.descricao as categ 
			from produtos 
			inner join categoria 
			on categoria.idcategoria = produtos.idcategoria 
			order by categoria.descricao;";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function pegarTodosPedidosDatas($datad1, $datad2) {
	$sql = "SELECT * 
			FROM pedido 
			WHERE datacompra BETWEEN '$datad1' AND '$datad2'";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function pegarTodosPedidosMunicipioEstado() {
	$sql = "SELECT e.cidade, COUNT(p.idPedido) AS quant			
                FROM pedido p
                INNER JOIN usuario u
                ON u.idUsuario = p.idUsuario
                INNER JOIN endereco e
                ON u.idUsuario = e.idusuario
                group by e.cidade";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function pegarTodosTotalFaturamamento($tipoFaturamento) {
	switch ($tipoFaturamento) {
		case 'semanal':
			$sql = "SELECT WEEK(p.datacompra) AS semana, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY WEEK(p.dataCompra, 0)";
			break;
		case 'mensal':
			$sql = "SELECT MONTH(p.datacompra) AS mes, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY MONTH(p.datacompra)";
			break;
		case 'anual':
			$sql = "SELECT YEAR(p.datacompra) AS ano, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY YEAR(p.datacompra)";
			break;
	}
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

function buscarPorCidade($cidade)
{
    $sql = "SELECT e.idendereco, e.cidade, p.idPedido
            FROM pedido p";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$pedido[] = $linha;
	}
	return $pedido;
}