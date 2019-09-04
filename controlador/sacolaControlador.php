<?php

require_once "modelo/produtoModelo.php";

function adicionar($idProduto) {
    // se existir a session carrinho
    if (isset($_SESSION["carrinho"])) {
        // produtos recebe session carrinho, pega o conteúdo dela
        $produtos = $_SESSION["carrinho"];
    } else {
        // produtos recebe um array vazio
        $produtos = [];
    }

    //verificar se existe o produto ja na lista de produtos!
    $chave = existeProdutoNoCarrinho($produtos, $idProduto);

    //$produto["quantidade"] = 0; 
    if ($chave === false) {
        $produto = pegarProdutoPorId($idProduto);
        //$produto["quantidade"] = 1;
        $produtos[] = $produto;
    } else {
        $produto = $produtos[$chave];
        //$produto["quantidade"]++;
        $produtos[$chave] = $produto;
    }
    // produtos na posição dinâmica recebe o produto
    // salva todos os produtos na session carrinho
    $_SESSION["carrinho"] = $produtos;
    // redirecionar para a função de exibição de produtos
    redirecionar("sacola/mostrar");
}

function existeProdutoNoCarrinho($produtos, $idProduto) {
    foreach ($produtos as $chave => $produto) {
        if ($produto["idproduto"] == $idProduto) { //ja existe
            return $chave;
        }
    }
    return false;
}

function mostrar() {
    // se existir a session carrinho
    if (isset($_SESSION["carrinho"])) {
        // produtos recebe session carrinho, pega o conteúdo dela
        $produtos = $_SESSION["carrinho"];
        // session carrinho vai receber o array produtos
        $_SESSION["carrinho"] = $produtos;
        // se não existir a session carrinho
    } else {
        // produtos recebe um array vazio
        $produtos = [];
    }

    // define os dados a serem passados de quantidade de produtos e total
    $quantidadeProdutos = 0;
    $subtotal = 0;
    foreach ($produtos as $posicao => $valor) {
        //$quantidadeProdutos += $valor["quantidade"];
        //$subtotal += ($valor["preco"] * $valor["quantidade"]);
    }

    $dados['quantidadeProdutos'] = $quantidadeProdutos;
    $dados['subtotal'] = $subtotal;
    $dados['produtos'] = $produtos;

    // exibe a página inicial junto aos dados dos produtos
    exibir("carrinho/mostrar", $dados);
}

function limparCarrinho() {
    unset($_SESSION['carrinho']);
    redirecionar("sacola/mostrar");
}

function removerProduto($id) {
    $produtos = $_SESSION['carrinho'];
    foreach ($produtos as $key => $produto) {
        if ($produto['idproduto'] == $id) {
            unset($produtos[$key]);
        }
    }
    $_SESSION['carrinho'] = $produtos;
    redirecionar("sacola/mostrar");
}

?>