<?php

require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formapagamentoModelo.php';

function salvarPedido() {
    $idUsuario = acessoPegarUsuarioLogado();
    $produtos = $_SESSION['carrinho'];
    if (ehPost()) {
        $idUsuario = $_POST ["idUsuario"];
        $idendereco = $_POST ["idendereco"];
        $idformapagamento = $_POST ["idformapagamento"];
        
            $msg = adicionarPedido($idUsuario, $idendereco, $idformapagamento,$produtos);
            echo $msg;
            redirecionar("pedido/listarPedidos");
    } else {
        $dados = [];
        $dados["enderecos"] = pegarEnderecosPorUsuario($idUsuario);
        $dados["formapagamento"] = pegarTodasFormapagamento();
        $dados ["produtos"] = $produtos;
        exibir("pedido/formulario", $dados);
    }
}
        