<?php

require_once 'modelo/admModelo.php';
require_once 'modelo/produtoModelo.php';


function listaProdutoseQuantidadedoEstoque() {
    $dados = array();
    $dados["adm"] = pegarTodosProdutoEstoque();
    exibir("adm/listaProdutoseQuantidadedoEstoque", $dados);
}
function listaProdutosCategoria() {
    $dados = array();
    $dados["adm"] = pegarTodosProdutoeCategoria();
    exibir("adm/listaProdutosCategoria", $dados);
}
function listaPedidosRealizadosDatas() {
    $dados = array();
    $dados["adm"] = pegarTodosPedidosDatas();
    exibir("adm/listaPedidosRealizadosDatas", $dados);
}
function listaPedidosMunicipioEstado() {
    $dados = array();
    $dados["adm"] = pegarTodosPedidosMunicipioEstado();
    exibir("adm/listaPedidosMunicipioEstado", $dados);
}
function totalFaturamentoPeriodo() {
    $dados = array();
    $dados["adm"] = pegarTodosTotalFaturamamento();
    exibir("adm/totalFaturamentoPeriodo", $dados);
}