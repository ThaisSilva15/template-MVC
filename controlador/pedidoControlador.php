<?php

require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formapagamentoModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/produtoModelo.php';

function salvarPedido() {
    $idUsuario = acessoPegarUsuarioLogado();
    $produtos = $_SESSION['carrinho'];
    $total = 0;
     foreach ($produtos as $produto):
         $total = $produto["preco"] + $total;
     endforeach;
    if (ehPost()) {
        $idendereco = $_POST ["idendereco"];
        $idformapagamento = $_POST ["idformapagamento"];
        
            $msg = adicionarPedido($idUsuario, $idendereco, $idformapagamento,$produtos, $total);
            echo $msg;
            redirecionar("pedido/listarPedidos");
    } else {
        $dados = [];
        $dados["enderecos"] = pegarEnderecosPorUsuario($idUsuario);
        $dados["formapagamento"] = pegarTodasFormapagamento();
        $dados ["produtos"] = $produtos;
        $dados ["total"] = $total;
        exibir("pedido/formulario", $dados);
    }
}

function listarPedidos () {
    $dados = array();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir("pedido/listar", $dados);
}

function ver ($id) {
    $dados = array();
    $dados['pedido'] = selecionarPedido($id);
    $dados['produtos'] = selecionarPedidoProdutos($id);
    exibir("pedido/ver", $dados);
}