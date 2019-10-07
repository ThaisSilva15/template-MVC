<?php
function salvarPedido() {
    if (ehPost()) {
        $descricao = $_POST ["descricao"];

        $errors = array();
        if (valida_vazio($descricao, "Descrição") != NULL) {
            $errors[] = valida_vazio($descricao, "Descrição");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            $dados["categorias"] = pegarTodosPedidos();
            exibir("produto/formulario", $dados);
        } else {
            $msg = adicionarProduto($formapagamento, $endereco, $idUsuario);
            echo $msg;
            redirecionar("produto/listarProduto");
        }
    } else {
        $dados = [];
        $dados["categorias"] = pegarTodosPedidos();
        exibir("produto/formulario", $dados);
    }
}
