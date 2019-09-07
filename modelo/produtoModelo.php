<?php

function adicionarProduto($preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $categoria) {
    $sql = "INSERT INTO produtos (preco, nomeproduto, descricao, imagem, estoque_minimo, estoque_maximo, idcategoria) VALUES ('$preco', '$nomeproduto', '$descricao', '$imagem', '$estoque_minimo', '$estoque_maximo', '$categoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar o produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}

function pegarTodosProduto() {
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function BuscarProdutosPorNome($nome) {
    $sql = "SELECT * FROM produtos WHERE nomeproduto LIKE '$nome'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}

function pegarProdutoPorId($id) {
    $sql = "select * from produtos where idproduto= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function deletarProduto($id) {
    $sql = "DELETE FROM produtos WHERE idproduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar o Produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}

function editarProduto($idProduto, $preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $categoria) {
    $sql = "update produtos set  preco ='$preco', nomeproduto = '$nomeproduto', descricao ='$descricao', imagem ='$imagem', estoque_minimo ='$estoque_minimo', estoque_maximo ='$estoque_maximo', idcategoria ='$categoria' WHERE idProduto='$idProduto'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar produto' . mysqli_error($cnx));
    }
    return 'Produto alterado com sucesso!';
}
