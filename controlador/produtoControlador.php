<?php
require_once 'modelo/produtoModelo.php';
require_once 'servico/validarServico.php';

function visualizar(){
    $dados= array();
    $dados["Nome"]= "Base Ruby Rose ";
    $dados["Descrição"]= " Tenha uma ótima maquiagem usando a Base Líquida Matte HB8073 da Ruby Rose, sua textura fácil de aplicar e tem uma excelente cobertura A Base Líquida Matte, foi desenvolvida para conter a oleosidade da pele e disfarçar imperfeições. ";
    $dados["Preço"]= "8,99";
    
    exibir("produto/visualizar",$dados);
}
function adicionar(){
    if (ehPost()){
        $nome= $_POST ["nomeProduto"];
        $codigo= $_POST ["codigo"];
        $valor= $_POST ["valor"];
        
        $errors = array();
        if (valida_nao_vazio($nome, "nomeProduto") != NULL) {
            $errors[] = valida_nao_vazio($nome, "nomeProduto");
        }
        if ( valida_tipoEspe ($codigo, "codigo") != NULL) {
            $errors[] =  valida_tipoEspe ($codigo, "codigo");
        }
        if (valida_nao_vazio($valor, "valor") != NULL) {
            $errors[] = valida_nao_vazio($valor, "valor");
        } 
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("produto/formulario", $dados);
        } else {
            $msg = adicionarProduto ($nome, $codigo, $valor);
        echo $msg;
            redirecionar("./produto/listarProduto");
        }
    } else {
        exibir("produto/formulario");
    }
}     
function listarProduto(){
    $dados = array ();
    $dados["produto"] = pegarTodosProduto();
    exibir ("produto/listar", $dados);
 }
 function ver($idproduto){
    $dados ["produto"] = pegarProdutoPorId($idproduto);
    exibir ("produto/visualizar", $dados);
}
