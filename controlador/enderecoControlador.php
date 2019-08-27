<?php

require_once 'servico/validarServico.php';
require_once 'modelo/enderecoModelo.php';



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
function deletar($id, $idUsuario){
    $msg = deletarEndereco($id);
    redirecionar("cliente/ver/$idUsuario");
}
function editar($idendereco, $idUsuario) {
    if(ehPost()) {
        $logradouro = $_POST ["logradouro"];
        $numero = $_POST ["numero"];
        $complemento = $_POST ["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
        redirecionar ("cliente/ver/$idUsuario");
    }else{
        $dados["endereco"] = pegarEnderecoPorId($idendereco);
        exibir ("endereco/formulario", $dados);
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
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("endereco/formulario", $dados);
        } else {
            $msg = adicionarEndereco( $idusuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
            echo $msg;
            redirecionar("cliente/ver/$idusuario");
        } 
    } else {
         $dados["endereco"] = pegarEnderecoPorId($idusuario);
        exibir ("endereco/formulario", $dados);
    }
} 

?>