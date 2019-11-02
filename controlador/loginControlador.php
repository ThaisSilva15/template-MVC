<?php

require_once "modelo/clienteModelo.php";
require_once "biblioteca/acesso.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($email, $senha);

        if (acessoLogar($usuario)) {
            redirecionar("produto/listarProduto");
        } else {
            $dados['error'] = "Email ou senha inválidos!";
            exibir("login/index", $dados);
        }
    } else {
        exibir("login/index");
    }
}

/** anon */
function logout() {
    acessoDeslogar();
    redirecionar("paginas/");
}

?>