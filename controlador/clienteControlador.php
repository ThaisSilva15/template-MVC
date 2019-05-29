<?php

require_once 'servico/validarServico.php';
require_once 'modelo/clienteModelo.php';

function cadastro() {
    if (ehPost()) {
        $nome = $_POST ["nomeCliente"];
        $sobrenome = $_POST ["sobrenome"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $confirmarsenha = $_POST ["confirmarSenha"];
        $cpf = $_POST["CPF"];
        $sexo = $_POST["sexo"];
        $datadeNascimento = $_POST["dataNascimento"];
        $errors = array();
        if (valida_nao_vazio($nome, "nome") != NULL) {
            $errors[] = valida_nao_vazio($nome, "nome");
        }
        if (valida_nao_vazio($sobrenome, "Sobrenome") != NULL) {
            $errors[] = valida_nao_vazio($sobrenome, "Sobrenome");
        }
        if (validar_email($email) != NULL) {
            $errors[] = validar_email($email);
        }
        if (valida_nao_vazio($senha) != NULL) {
            $errors[] = valida_nao_vazio($senha);
        }
        if (valida_nao_vazio($confirmarsenha) != NULL) {
            $errors[] = valida_nao_vazio($confirmarsenha);
        }
        if (valida_nao_vazio($cpf) != NULL) {
            $errors[] = valida_nao_vazio($cpf);
        }
        if (valida_nao_vazio($sexo) != NULL) {
            $errors[] = valida_nao_vazio($sexo);
        }
        if (valida_nao_vazio($datadeNascimento) != NULL) {
            $errors[] = valida_nao_vazio($datadeNascimento);
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/cadastro", $dados);
        } else {
            $msg = adicionarCliente($nome, $sobrenome, $email, $senha, $confirmarsenha, $cpf, $sexo, $datadeNascimento);
            echo $msg;
            redirecionar("cliente\listarClientes");
        }
    } else {
        exibir("cliente/cadastro");
    }
}

    function contato() {
        if (ehPost()) {
            $nome = $_POST ["nomeCliente"];
            $email = $_POST ["email"];
            $cpf = $_POST ["CPF"];
            $telefone = $_POST ["telefone"];
            $mensagem = $_POST ["mensagem"];

            echo valida_nao_vazio($nomeCliente);
            echo valida_email($email);
            echo valida_nao_vazio($CPF);
            echo valida_nao_vazio($telefone);
            echo valida_nao_vazio($mensagem);
        } else {
            exibir("cliente/contato");
        }
    }

    function listarClientes() {
        $dados = array();
        $dados["clientes"] = pegarTodosClientes();
        exibir("cliente/listar", $dados);
    }
    ?>
    
