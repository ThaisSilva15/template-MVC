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
        
        echo valida_nao_vazio($nome);
        echo valida_tipoEspe ($codigo);
        echo valida_nao_vazio ($valor);
        $msg = adicionarProduto ($nome, $codigo, $valor);
        echo $msg;
   }else{
       exibir("produto/formulario");
   }
}
