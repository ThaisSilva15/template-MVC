<?php

require_once 'servico/validarServico.php';
require_once 'modelo/clienteModelo.php';
require_once 'modelo/enderecoModelo.php';

/** anon */
function cadastro() {
    if (ehPost()) {
        $nomeUsuario = $_POST["nomeUsuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["CPF"];
        $sexo = $_POST["sexo"];
        $tipoUsuario = $_POST["tipoUsuario"];

        $data = [];
        $data[0] = $_POST["dia"];
        $data[1] = $_POST["mes"];
        $data[2] = $_POST["ano"];

        $errors = [];

        if (!valida_Nome($nomeUsuario)) {$errors['nome'] = "Nome inválido";}

        if (!valida_Email($email)) {$errors['email'] = "Email inválido";}

        if (!valida_Senha($senha)) {$errors['senha'] = "Senha não permitida";}

        if (!valida_CPF($cpf)) {$errors['cpf'] = "CPF inválido";}

        if (!valida_Data($data[0],$data[1],$data[2])) {$errors['data'] = "Data inválida";}

        if (count($errors) > 0) {

            $dados = [];
            $dados["errors"] = $errors;
            exibir("cliente/cadastro", $dados);
        } else {
            $nascimento = $data[2].'-'.$data[1].'-'.$data[0];
            adicionarUsuario($nomeUsuario, $email, $senha, $cpf, $nascimento, $sexo, $tipoUsuario);
            redirecionar("cliente/listarUsuarios");
        }
    } else {
        exibir("cliente/cadastro");
    }
}

/** ADM */
function listarUsuarios() {
    $dados = array();
    $dados["clientes"] = pegarTodosUsuarios();
    exibir("cliente/listar", $dados);
}

/** anon */
function ver($idUsuario) {
    $dados ["cliente"] = pegarUsuarioPorId($idUsuario);
    $dados ["enderecos"] = pegarEnderecosPorUsuario($idUsuario);
    exibir("cliente/visualizar", $dados);
}

/** ADM */
function deletar($id) {
    $msg = deletarUsuario($id);
    deletarEnderecoPorCliente($id);
    redirecionar("cliente/listarUsuarios");
}

/** anon */
function editar($id) {
    if (ehPost()) {
        $nomeUsuario = $_POST ["nomeUsuario"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $cpf = $_POST["CPF"];
        $sexo = $_POST["sexo"];

        $nascimento = [];
        $nascimento[0] = $_POST["dia"];
        $nascimento[1] = $_POST["mes"];
        $nascimento[2] = $_POST["ano"];

        $errors = [];

        if (valida_Nome($nomeUsuario) == false) {$errors['nome'] = "Nome inválido";}

        if (valida_Email($email) == false) {$errors['email'] = "Email inválido";}

        if (valida_Senha($senha) == false) {$errors['senha'] = "Senha não permitida";}

        if (valida_CPF($cpf) == false) {$errors['cpf'] = "CPF inválido";}

        if (valida_Data($nascimento[0],$nascimento[1],$nascimento[2]) == false) {$errors['data'] = "Data inválida";}

        if (count($errors) > 0) {
            $dados = [];
            $dados["errors"] = $errors;
            $dados["cliente"] = pegarUsuarioPorId($id);
            exibir("cliente/editar", $dados);
        } else {
            $data_nascimento = $nascimento[2].'-'.$nascimento[1].'-'.$nascimento[0];
            editarUsuario($id,$nomeUsuario, $email, $senha, $cpf, $data_nascimento, $sexo, $tipoUsuario);
            redirecionar("cliente/listarUsuarios");
        }
    } else {
        $dados["cliente"] = pegarUsuarioPorId($id);
        exibir("cliente/editar", $dados);
    }
}
