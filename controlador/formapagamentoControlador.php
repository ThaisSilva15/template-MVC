<?php

require_once 'modelo/formapagamentoModelo.php';
require_once 'servico/validarServico.php';

/** ADM */
function adicionar() {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
        $errors = array();
        if (valida_vazio($descricao, "Descrição") != NULL) {
            $errors[] = valida_vazio($descricao, "Descrição");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("formapagamento/formapagamento", $dados);
        } else {
            $msg = adicionarFormapagamento($descricao);
            echo $msg;
            redirecionar("./formapagamento/listarFormapagamento");
        }
    } else {
        exibir("formapagamento/formulario");
    }
}

/** ADM */
function listarFormapagamento() {
    $dados = array();
    $dados["formapagamentos"] = pegarTodasFormapagamento();
    exibir("formapagamento/listar", $dados);
}

/** ADM */
function ver($idformapagamento) {
    $dados ["formapagamento"] = pegarFormapagamentoPorId($idformapagamento);
    exibir("formapagamento/visualizar", $dados);
}

/** ADM */
function deletar($id) {
    $msg = deletarFormapagamento($id);
    redirecionar("formapagamento/listarFormapagamento");
}

/** ADM */
function editar($id) {
    if (ehPost()) {

        $descricao = $_POST ["descricao"];

        editarFormapagamento($id, $descricao);
        redirecionar("formapagamento/listarFormapagamento");
    } else {
        $dados["formapagamento"] = pegarFormapagamentoPorId($id);
        exibir("formapagamento/formulario", $dados);
    }
}

?>
