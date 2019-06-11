<?php
    if(ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
  ?>      
        <form action="" method="POST">
            
            Nome: <input type="text" name="nomeUsuario"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            CPF: <input type="text" name="CPF"><br><br>
            Data de Nacimento: <input type="text" name="datadenascimento"><br><br>
            Sexo: 
            Feminino<input  type="radio" name="sexo"  value="F" checked="checked" >
		Masculino<input type="radio" name="sexo" value="M"><br><br>
                
           
            
            <button>Enviar</button>
            
        </form>
        
     