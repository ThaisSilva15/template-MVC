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
        $preco= $_POST ["preco"];
        $nomeproduto= $_POST ["nomeproduto"];
        $descricao= $_POST ["descricao"];
        $imagem= $_POST ["imagem"];
        $estoque_minimo= $_POST ["estoque_minimo"];
        $estoque_maximo= $_POST ["estoque_maximo"];
        
        $errors = array();
        if (valida_nao_vazio($preco, "preco") != NULL) {
            $errors[] = valida_nao_vazio($preco, "preco");
        }
        if ( valida_nao_vazio ($nomeproduto, "nomeproduto") != NULL) {
            $errors[] =  valida_nao_vazio ($nomeproduto, "nomeproduto");
        }
        if (valida_nao_vazio($descricao, "descricao") != NULL) {
            $errors[] = valida_nao_vazio($descricao, "descricao");
        } 
        if (valida_nao_vazio($imagem, "imagem") != NULL) {
            $errors[] = valida_nao_vazio($imagem, "imagem");
        }
        if (valida_nao_vazio($estoque_minimo, "estoque_minimo") != NULL) {
            $errors[] = valida_nao_vazio($estoque_minimo, "estoque_minimo");
        }
        if (valida_nao_vazio($estoque_maximo, "estoque_maximo") != NULL) {
            $errors[] = valida_nao_vazio($estoque_maximo, "estoque_maximo");
        }
        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("produto/formulario", $dados);
        } else {
            $msg = adicionarProduto ($preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo);
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
function deletar($id){
        $msg = deletarProduto($id);
        redirecionar("produto/listarProduto");
    }
    
    function editar($id) {
    if(ehPost()) {
        $preco = $_POST ["preco"];
        $nomeproduto = $_POST ["nomeproduto"];
        $descricao = $_POST ["descricao"];
        $imagem = $_POST["imagem"];
        $estoque_minimo = $_POST["estoque_minimo"];
        $estoque_maximo = $_POST["estoque_maximo"];
        editarProduto($id, $preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo);
        redirecionar ("produto/listarproduto");
    }else{
        $dados["produto"] = pegarProdutoPorId($id);
        exibir ("produto/formulario", $dados);
    }
}

