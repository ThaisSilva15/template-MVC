<?php

require_once 'modelo/categoriaModelo.php';
require_once 'servico/validarServico.php';

/** admin */
function descricao() {
    if (ehPost()) {
        $descricao = $_POST ["descricao"];

        $errors = array();
        if (valida_vazio($descricao, "Descrição") != NULL) {
            $errors[] = valida_vazio($descricao, "Descrição");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categoria/categoria", $dados);
        } else {
            $msg = adicionarCategoria($descricao);
            echo $msg;
            redirecionar("./categoria/listarCategoria");
        }
    } else {
        exibir("categoria/categoria");
    }
}

/** admin */
function listarCategoria() {
    $dados = array();
    $dados["categoria"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

/** admin */
function ver($idcategoria) {
    $dados ["categoria"] = pegarCategoriaPorId($idcategoria);
    exibir("categoria/visualizar", $dados);
}

/** admin */
function deletar($id) {
    $msg = deletarCategoria($id);
    redirecionar("categoria/listarCategoria");
}

/** admin */
function editar($id) {
    if (ehPost()) {

        $descricao = $_POST ["descricao"];

        editarCategoria($id, $descricao);
        redirecionar("categoria/listarCategoria");
    } else {
        $dados["categoria"] = pegarCategoriaPorId($id);
        exibir("categoria/categoria", $dados);
    }
}

?>
