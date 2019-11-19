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
    $sql = "select produtos.nomeproduto, categoria.descricao as categ from produtos inner join categoria on categoria.idcategoria = produtos.idcategoria order by categoria.descricao;";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}
function pegarTodosPedidosDatas($datad1, $datad2) {
    $sql = "select * from pedido where datacompra between '$datad1' and '$datad2'";
    echo $sql;
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}
function pegarTodosPedidosMunicipioEstado() {
    $sql = "select * from produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}
function pegarTodosTotalFaturamamento() {
    $sql = "select * from produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}