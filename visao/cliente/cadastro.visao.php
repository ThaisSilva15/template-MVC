<?php
    if(ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
  ?>      
        <form action="" method="POST">
            
            Nome: <input type="text" name="nomeCliente"><br><br>
            Sobrenome: <input type="text" name="sobrenome"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            Confirmar Senha: <input type="password" name="confirmarSenha"><br><br>
            CPF: <input type="text" name="CPF"><br><br>
            Sexo: 
            Feminino<input  type="radio" name="sexo"  value="F" checked="checked" >
		Masculino<input type="radio" name="sexo" value="M"><br><br>
                
            Data de Nacimento: <input type="text" name="dataNascimento"><br><br>
            
            <button>Enviar</button>
            
        </form>
        
     