<?php

require_once 'modelo/produtoModelo.php';
require_once 'modelo/categoriaModelo.php';
require_once 'servico/validarServico.php';
require_once 'servico/uploadServico.php';

function adicionar() {
    if (ehPost()) {
        $preco = $_POST ["preco"];
        $nomeproduto = $_POST ["nomeproduto"];
        $descricao = $_POST ["descricao"];

        $imagem_temp_name = $_FILES["imagem"]["tmp_name"];
        ;
        $name_imagem = $_FILES["imagem"]["name"];
        $imagem = uploadImagem($imagem_temp_name, $name_imagem);

        $categoria = $_POST["categoria"];
        $estoque_minimo = $_POST ["estoque_minimo"];
        $estoque_maximo = $_POST ["estoque_maximo"];

        $errors = array();
        if (valida_nao_vazio($preco, "preco") != NULL) {
            $errors[] = valida_nao_vazio($preco, "preco");
        }
        if (valida_nao_vazio($nomeproduto, "nomeproduto") != NULL) {
            $errors[] = valida_nao_vazio($nomeproduto, "nomeproduto");
        }
        if (valida_nao_vazio($descricao, "descricao") != NULL) {
            $errors[] = valida_nao_vazio($descricao, "descricao");
        }
        if (valida_nao_vazio($imagem, "imagem") != NULL) {
            $errors[] = valida_nao_vazio($imagem, "imagem");
        }
        if (valida_nao_vazio($estoque_minimo, "estoque_minimo") != NULL) {
            $errors[] = valida_nao_vazio($estoque_minimo, "estoque_minimo");
        }
        if (valida_nao_vazio($estoque_maximo, "estoque_maximo") != NULL) {
            $errors[] = valida_nao_vazio($estoque_maximo, "estoque_maximo");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            $dados["categorias"] = pegarTodasCategorias();
            exibir("produto/formulario", $dados);
        } else {
            $msg = adicionarProduto($preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $categoria);
            echo $msg;
            redirecionar("./produto/listarProduto");
        }
    } else {
        $dados = array();
        $dados["categorias"] = pegarTodasCategorias();
        exibir("produto/formulario", $dados);
    }
}

function listarProduto() {
    $dados = array();
    $dados["produtos"] = pegarTodosProduto();
    exibir("produto/listar", $dados);
}

function ver($idproduto) {
    $dados ["produto"] = pegarProdutoPorId($idproduto);
    exibir("produto/visualizar", $dados);
}

function deletar($id) {
    $msg = deletarProduto($id);
    redirecionar("produto/listarProduto");
}

function editar($id) {
    if (ehPost()) {
        $preco = $_POST ["preco"];
        $nomeproduto = $_POST ["nomeproduto"];
        $descricao = $_POST ["descricao"];

        $imagem_temp_name = $_FILES["imagem"]["tmp_name"];
        ;
        $name_imagem = $_FILES["imagem"]["name"];
        $imagem = uploadImagem($imagem_temp_name, $name_imagem);

        $categoria = $_POST["categoria"];
        $estoque_minimo = $_POST["estoque_minimo"];
        $estoque_maximo = $_POST["estoque_maximo"];
        editarProduto($id, $preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $categoria);
        redirecionar("produto/listarproduto");
    } else {
        $dados["categorias"] = pegarTodasCategorias();
        $dados["produto"] = pegarProdutoPorId($id);
        exibir("produto/formulario", $dados);
    }
}

?>