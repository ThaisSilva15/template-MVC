<?php

require_once "modelo/clienteModelo.php";
require_once "biblioteca/acesso.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($email, $senha);

        if (acessoLogar($usuario)) {
            echo ("Bem vindo" . $login);
            redirecionar("usuario");
        } else {
            $dados['error'] = "Email ou senha inválidos!";
            exibir("login/index",$dados);
        }
    } else {
        exibir("login/index");
    }
}

/** anon */
function logout() {
    acessoDeslogar();
    echo "deslogado com sucesso!";
    redirecionar("usuario");
}

?>