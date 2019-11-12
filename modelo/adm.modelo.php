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
