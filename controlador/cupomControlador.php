<?php

require_once 'servico/validarServico.php';
require_once 'modelo/cupomModelo.php';

function cadastro() {
    if (ehPost()) {
        $nomecupom = $_POST ["nomecupom"];
        $desconto = $_POST ["desconto"];
        $errors = array();
        if (valida_vazio($nomecupom, "nomecupom") != NULL) {
            $errors[] = valida_vazio($nomecupom, "nomecupom");
        }
        if (valida_vazio($desconto, "desconto") != NULL) {
            $errors[] = valida_vazio($desconto, "desconto");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formulario", $dados);
        } else {
            $msg = adicionarCupom($nomecupom, $desconto);
            echo $msg;
            redirecionar("cupom/listarCupom");
        }
    } else {
        exibir("cupom/formulario");
    }
}

//function contato() {
    //if (ehPost()) {
        //$nome = $_POST ["nomeCliente"];
        //$email = $_POST ["email"];
        //$cpf = $_POST ["CPF"];
        //$telefone = $_POST ["telefone"];
        //$mensagem = $_POST ["mensagem"];
        //echo valida_nao_vazio($nomeCliente);
        //echo valida_email($email);
        //echo valida_nao_vazio($CPF);
        //echo valida_nao_vazio($telefone);
        //echo valida_nao_vazio($mensagem);
   // } else {
       // exibir("endereco/contato");
    //}
//}

function listarCupom() {
    $dados = array();
    $dados["cupoms"] = pegarTodosCupom();
    exibir("cupom/listar", $dados);
}
function ver($idcupom){
    $dados ["cupom"] = pegarCupomPorId($idcupom);
    exibir ("cupom/visualizar", $dados);
}
function deletar($idcupom){
    $msg = deletarCupom($idcupom);
    redirecionar("cupom/listarCupom");
}
function editar($idcupom) {
    if(ehPost()) {
        $nomecupom = $_POST ["nomecupom"];
        $desconto = $_POST ["desconto"];
        editarCupom($idcupom, $nomecupom, $desconto);
        redirecionar ("cupom/listarCupom");
    }else{
        $dados["cupom"] = pegarCupomPorId($idcupom);
        exibir ("cupom/formulario", $dados);
    }
}
function adicionar($idcupom) {
    if (ehPost()) {       
        $nomecupom = strip_tags($_POST ["nomecupom"]);
        $desconto =  strip_tags($_POST ["desconto"]);
        $errors = array();
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formulario", $dados);
        } else {
            $msg = adicionarCupom( $idcupom, $nomecupom, $desconto);
            echo $msg;
            redirecionar("cupom/listarCupom");
        } 
    } else {
         $dados["cupom"] = pegarCupomPorId($idcupom);
        exibir ("cupom/formulario", $dados);
    }
} 

?>
