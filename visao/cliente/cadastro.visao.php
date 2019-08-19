<?php
if(ehPost()){
    foreach ($errors as $erro){
        echo "$erro<br>";
    }
}
?>      
<h1> Cadastro </h1>
<form action="" method="POST">
Nome: <input type="text" name=" nomeUsuario" value="<?=@$cliente['nomeUsuario']?>">
E-mail: <input type="text" name="email" value="<?=@$cliente['email']?>">
Senha: <input type="password" name="senha" value="<?=@$cliente['senha']?>">
CPF: <input type="text" name="CPF" value="<?=@$cliente['cpf']?>">
Data de Nacimento: <input type="text" name="datadenascimento" value="<?=@$cliente['datadenascimento']?>">
Sexo: 
Feminino<input  type="radio" name="sexo"  value="F" checked="checked" >
Masculino<input type="radio" name="sexo" value="M"><br><br>
Tipo Usuário: 
Cliente <input  type="radio" name="tipoUsuario"value="User" checked="checked" >
Administrador<input type="radio" name="tipoUsuario" value="Adm"><br><br>



<button type="submit">Enviar</button>

</form>


