<?php

require_once 'servico/validarServico.php';
require_once 'modelo/clienteModelo.php';

function cadastro() {
    if (ehPost()) {
        $nomeUsuario = $_POST ["nomeUsuario"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $cpf = $_POST["CPF"];
        $datadenascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipoUsuario = $_POST["tipoUsuario"];
        $errors = array();
        if (valida_nao_vazio($nomeUsuario, "nomeUsuario") != NULL) {
            $errors[] = valida_nao_vazio($nomeUsuario, "nome Usuario");
        }
        if (validar_email($email, "email") != NULL) {
            $errors[] = validar_email($email, "email");
        }
        if (valida_nao_vazio($senha, "senha") != NULL) {
            $errors[] = valida_nao_vazio($senha, "senha");
        }
        if (valida_tipoEspe($cpf, "cpf") != NULL) {
            $errors[] = valida_tipoEspe($cpf,"CPF");
        }
        if (valida_nao_vazio($datadenascimento, "datadenascimento") != NULL) {
            $errors[] = valida_nao_vazio($datadenascimento, "data de nascimento");
        }
        if (valida_nao_vazio($sexo, "sexo") != NULL) {
            $errors[] = valida_nao_vazio($sexo, "sexo");
        }
        if (valida_nao_vazio($tipoUsuario, "tipoUsuario") != NULL) {
           $errors[] = valida_nao_vazio($tipoUsuario, "tipoUsuario");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/cadastro", $dados);
        } else {
            $msg = adicionarUsuario($nomeUsuario, $email, $senha, $cpf,$datadenascimento, $sexo, 1);
            echo $msg;
            redirecionar("cliente/listarUsuarios");
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

    function listarUsuarios() {
        $dados = array();
        $dados["clientes"] = pegarTodosUsuarios();
        exibir("cliente/listar", $dados);
    }
  function ver($idUsuario){
    $dados ["cliente"] = pegarUsuarioPorId($idUsuario);
    exibir ("cliente/visualizar", $dados);
}
 function deletar($id){
        $msg = deletarUsuario($id);
        redirecionar("cliente/listarUsuarios");
    }


    ?>
    
