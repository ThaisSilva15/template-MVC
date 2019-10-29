<?php

require_once 'modelo/produtoModelo.php';
require_once 'modelo/categoriaModelo.php';
require_once 'servico/validarServico.php';
require_once 'servico/uploadServico.php';

/** ADM */
function adicionar() {
    if (ehPost()) {
        $preco = $_POST ["preco"];
        $nomeproduto = $_POST ["nomeproduto"];
        $descricao = $_POST ["descricao"];

        $imagem_temp_name = $_FILES["imagem"]["tmp_name"];
        $name_imagem = $_FILES["imagem"]["name"];
        $imagem = uploadImagem($imagem_temp_name, $name_imagem);

        $categoria = $_POST ["categoria"];
        $estoque_minimo = $_POST ["estoque_minimo"];
        $estoque_maximo = $_POST ["estoque_maximo"];
        $quant_estoque = $_POST ["quant_estoque"];

        $errors = array();
        if (valida_vazio($preco, "preco") != NULL) {
            $errors[] = valida_vazio($preco, "preco");
        }
        if (valida_vazio($nomeproduto, "nomeproduto") != NULL) {
            $errors[] = valida_vazio($nomeproduto, "nomeproduto");
        }
        if (valida_vazio($descricao, "descricao") != NULL) {
            $errors[] = valida_vazio($descricao, "descricao");
        }
        if (valida_vazio($imagem, "imagem") != NULL) {
            $errors[] = valida_vazio($imagem, "imagem");
        }
        if (valida_vazio($estoque_minimo, "estoque_minimo") != NULL) {
            $errors[] = valida_vazio($estoque_minimo, "estoque_minimo");
        }
        if (valida_vazio($estoque_maximo, "estoque_maximo") != NULL) {
            $errors[] = valida_vazio($estoque_maximo, "estoque_maximo");
        }
        if (valida_vazio($quant_estoque, "quant_estoque") != NULL) {
            $errors[] = valida_vazio($quant_estoque, "quant_estoque");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            $dados["categorias"] = pegarTodasCategorias();
            exibir("produto/formulario", $dados);
        } else {
            $msg = adicionarProduto($preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo,$quant_estoque, $categoria);
            echo $msg;
            redirecionar("produto/listarProduto");
        }
    } else {
        $dados = [];
        $dados["categorias"] = pegarTodasCategorias();
        exibir("produto/formulario", $dados);
    }
}

/** anon */
function listarProduto() {
    $dados = [];
    $dados["produtos"] = pegarTodosProduto();
    exibir("produto/listar", $dados);
}

/** anon */
function ver($idproduto) {
    $dados ["produto"] = pegarProdutoPorId($idproduto);
    exibir("produto/visualizar", $dados);
}

/** ADM */
function deletar($id) {
    $produto = pegarProdutoPorId($id);
    unlink($produto['imagem']);

    deletarProduto($id);
    redirecionar("produto/listarProduto");
}

/** ADM */
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
        $quant_estoque = $_POST ["quant_estoque"];
        editarProduto($id, $preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo,$quant_estoque, $categoria);
        redirecionar("produto/listarproduto");
    } else {
        $dados["categorias"] = pegarTodasCategorias();
        $dados["produto"] = pegarProdutoPorId($id);
        exibir("produto/editar", $dados);
    }
}

/** anon */
function buscar() {
    if (ehPost()) {
        $nome = $_POST['busca'];
        $dados['produtos'] = BuscarProdutosPorNome($nome);
        $dados['categorias'] = pegarTodasCategorias();
        exibir("produto/listar", $dados);
    }
}
