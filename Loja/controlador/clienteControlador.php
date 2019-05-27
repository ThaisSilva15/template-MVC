<?php
require_once 'servico/validarServico.php';
require_once 'modelo/clienteModelo.php';

   function cadastro(){
    if (ehPost()){
        $nome= $_POST ["nomeCliente"];
        $sobrenome= $_POST ["sobrenome"];
        $email= $_POST ["email"];
        $senha= $_POST ["senha"];
        $confirmarsenha= $_POST ["confirmarSenha"];
        $cpf= $_POST["CPF"];
        $sexo= $_POST["sexo"];
        $datadeNascimento= $_POST["dataNascimento"];
    
        
        echo valida_tipoEspe($nome);
        echo valida_tipoEspe ($sobrenome);
        echo validar_email ($email);
        echo validar_nao_vazio($senha);
        echo valida_tipoEspe ($confirmarsenha);
        echo valida_nao_vazio ($cpf);
        echo valida_nao_vazio($sexo);
        echo valida_tipoEspe ($datadeNascimento);
         
        $msg = adicionarCliente ($nome,$sobrenome, $email,$senha,$confirmarsenha,$cpf,$sexo,$datadeNascimento);
        echo $msg;
      print_r($_POST);
   }else{
       exibir("cliente/cadastro");
   
}     

function contato(){
    if (ehPost()){
        $nome= $_POST ["nomeCliente"];
        $email= $_POST ["email"];
        $cpf= $_POST ["CPF"];
        $telefone= $_POST ["telefone"];
        $mensagem= $_POST ["mensagem"];
        
        echo valida_nao_vazio($nomeCliente);
        echo valida_email ($email);
        echo valida_nao_vazio ($CPF);
        echo valida_nao_vazio($telefone);
        echo valida_nao_vazio ($mensagem);
        
        
      print_r($_POST);
   }else{
       exibir("cliente/contato");
   }
} 






?>
    
