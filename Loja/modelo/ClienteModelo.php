 <?php

 function adicionarCliente($nome,$sobrenome, $email,$senha,$confirmarsenha,$cpf,$sexo,$datadeNascimento){
     $sql ="INSERT INTO cliente (nome, sobrenome, email, senha, confirmarsenha, cpf, sexo, datadeNascimento) VALUES ('$nome', '$sobrenome', $email',$senha',$confirmarsenha',$cpf',$sexo',$datadeNascimento)";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if (!$resultado) { die('Erro ao cadastrar cliente' . mysqli_error ($cnx));}
     return 'Cliente cadastrado com sucesso!';    
 }
 ?>
    
