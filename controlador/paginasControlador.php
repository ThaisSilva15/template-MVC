<?php

require 'modelo/produtoModelo.php';

function index() {
    $dados = [];
    $dados['produtos'] = pegarTodosProduto();
    exibir("paginas/inicial", $dados);
}

function contato() {
    if (ehPost()) {
        $nome = $_POST ["nomeCliente"];
        $email = $_POST ["email"];
        $cpf = $_POST ["CPF"];
        $telefone = $_POST ["telefone"];
        $mensagem = $_POST ["mensagem"];
        
        echo ($nomeCliente);
        echo ($email);
        echo ($CPF);
        echo ($telefone);
        echo ($mensagem);
    }else {
        exibir("paginas/contato");
    }
}

function sobre(){
    exibir("paginas/sobre");
}