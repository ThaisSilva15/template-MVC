<?php
    if(ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
  ?>      
<h1> Cadastro </h1>
        <form action="" method="POST">
           
            Nome: <input type="text" name="nomeUsuario"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            CPF: <input type="text" name="CPF"><br><br>
            Data de Nacimento: <input type="text" name="datadenascimento"><br><br>
            Sexo: 
            Feminino<input  type="radio" name="sexo"  value="F" checked="checked" >
		Masculino<input type="radio" name="sexo" value="M"><br><br>
                Tipo Usuário: 
            Cliente <input  type="radio" name="tipoUsuario"  value="Cliente" checked="checked" >
		Administrador<input type="radio" name="tipoUsuario" value="Adm"><br><br>
              
           
            
            <button>Enviar</button>
            
        </form>
        
     
