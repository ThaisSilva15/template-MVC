<?php
   function cadastro(){
    if (ehPost()){
        $nome= $_POST ["nomeCliente"];
        $sobrenome= $_POST ["sobrenome"];
        $email= $_POST ["email"];
        $senha= $_POST ["senha"];
        $confirmarsenha= $_POST ["confirmarSenha"];
        $cpf= $_POST ["CPF"];
        $sexo= $_POST ["sexo"];
        $datadeNascimento= $_POST ["dataNascimento"];
        
        
      print_r($_POST);
   }else{
       exibir("cliente/cadastro");
   }
}     

    function contato(){
    if (ehPost()){
        $nome= $_POST ["nomeCliente"];
        $email= $_POST ["email"];
        $cpf= $_POST ["CPF"];
        $telefone= $_POST ["telefone"];
        $mensagem= $_POST ["mensagem"];
        
        
      print_r($_POST);
   }else{
       exibir("cliente/contato");
   }
}     





?>
    
