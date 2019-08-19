<?php

require_once 'servico/validarServico.php';
require_once 'modelo/clienteModelo.php';

function cadastro() {
    if (ehPost()) {
        $logradouro = $_POST ["logradouro"];
        $numero = $_POST ["numero"];
        $complemento = $_POST ["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        $errors = array();
        if (valida_nao_vazio($logradouro, "logradouro") != NULL) {
            $errors[] = valida_nao_vazio($logradouro, "logradouro");
        }
        if (validar_email($numero, "numero") != NULL) {
            $errors[] = validar_email($numero, "numero");
        }
        if (valida_nao_vazio($complemento, "complemento") != NULL) {
            $errors[] = valida_nao_vazio($complemento, "complemento");
        }
        if (valida_tipoEspe($bairro, "bairro") != NULL) {
            $errors[] = valida_tipoEspe($bairro,"bairro");
        }
        if (valida_nao_vazio($cidade, "cidade") != NULL) {
            $errors[] = valida_nao_vazio($cidade, "cidade");
        }
        if (valida_nao_vazio($cep, "cep") != NULL) {
            $errors[] = valida_nao_vazio($cep, "cep");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("endereco/cadastro", $dados);
        } else {
            $msg = adicionarEndereco($logradouro, $numero, $complemento, $bairro,$cidade, $cep, 1);
            echo $msg;
            redirecionar("endereco/listarEndereco");
        }
    } else {
        exibir("endereco/cadastro");
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
        exibir("endereco/contato");
    }
}

function listarEndereco() {
    $dados = array();
    $dados["enderecos"] = pegarTodosEndereco();
    exibir("endereco/listar", $dados);
}
function ver($idEndereco){
    $dados ["endereco"] = pegarEnderecoPorId($idEndereco);
    exibir ("endereco/visualizar", $dados);
}
function deletar($id){
    $msg = deletarEndereco($id);
    redirecionar("endereco/listarEndereco");
}
function editar($id) {
    if(ehPost()) {
        $logradouro = $_POST ["logradouro"];
        $numero = $_POST ["numero"];
        $complemento = $_POST ["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        editarUsuario($id, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
        redirecionar ("endereco/listarEndereco");
    }else{
        $dados["endereco"] = pegarUsuarioPorId($id);
        exibir ("endereco/cadastro", $dados);
    }
}
function adicionar($idusuario) {
    if (ehPost()) {       
        $logradouro = strip_tags($_POST ["logradouro"]);
        $numero =  strip_tags($_POST ["numero"]);
        $complemento =  strip_tags($_POST ["complemento"]);
        $bairro =  strip_tags($_POST ["bairro"]);
        $cidade =  strip_tags($_POST ["cidade"]);
        $cep =  strip_tags($_POST ["cep"]);
        $errors = array();
    }
}

?>