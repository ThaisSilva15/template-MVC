<?php

require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formapagamentoModelo.php';

function salvarPedido() {
    if (ehPost()) {
        $idPedido = $_POST ["idPedido"];
        $idUsuario = $_POST ["idUsuario"];
        $idendereco = $_POST ["idendereco"];
        $idformapagamento = $_POST ["idformapagamento"];
        $produtos = $_SESSION['sacola'];
            $msg = adicionarPedido($idPedido, $idUsuario, $idendereco, $idformapagamento,$produtos);
            echo $msg;
            redirecionar("pedido/listarPedidos");
    } else {
        $dados = [];
        $dados["endereco"] = pegarEnderecosPorUsuario();
        $dados["formapagamento"] = pegarFormapagamentoPorId();
        exibir("produto/formulario", $dados);
    }
}
        