<?php
function visualizar(){
    $dados= array();
    $dados["Nome"]= "Base Ruby Rose ";
    $dados["Descrição"]= " Tenha uma ótima maquiagem usando a Base Líquida Matte HB8073 da Ruby Rose, sua textura fácil de aplicar e tem uma excelente cobertura A Base Líquida Matte, foi desenvolvida para conter a oleosidade da pele e disfarçar imperfeições. ";
    $dados["Preço"]= "8,99";
    
    exibir("produto/visualizar",$dados);
}
function adicionar(){
    if (ehPost()){
        $nome= $_POST ["Nome do produto"];
        $código= $_POST ["código"];
        $valor= $_POST ["valor"];
        
      print_r($_POST);
   }else{
       exibir("produto/formulario");
   }
}