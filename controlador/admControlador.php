<?php

require_once 'modelo/produtoModelo.php';
require_once 'modelo/categoriaModelo.php';


function listaProdutoseQuantidadedoEstoque() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutoEstoque();
    exibir("produto/listar", $dados);
}
function listaProdutosCategoria() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutodoEstoque();
    exibir("produto/listar", $dados);
}
function listaPedidosRealizadosDatas() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutodoEstoque();
    exibir("produto/listar", $dados);
}
function listaPedidosMunicipioEstado() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutodoEstoque();
    exibir("produto/listar", $dados);
}
function totalFaturamentoPeriodo() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutodoEstoque();
    exibir("produto/listar", $dados);
}