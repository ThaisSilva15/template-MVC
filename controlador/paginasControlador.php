<?php

require_once "modelo/produtoModelo.php";

function index() {
    $dados=array();
    $dados['produtos'] = listarProdutos();
    exibir("paginas/index",$dados);
}

?>