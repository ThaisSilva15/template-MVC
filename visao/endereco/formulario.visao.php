
<form method="POST" action ="">
    <label for="email"><b> logradouro:</b></label>
    <input type="text"  placeholder="Logradouro" name="logradouro" value="<?=@$endereco['logradouro']?>" required="">

    <label for="psw"><b>Numero:</b></label>
    <input type="text" placeholder="Numero" name="numero" value="<?=@$endereco['numero']?>" required="">
   
    <label for="email"><b>Complemento:</b></label>
    <input type="text" placeholder="Complemento" name="complemento" value="<?=@$complemento['complemento']?>" >
    
    <label for="email"><b>Bairro:</b></label>
    <input type="text" placeholder="Bairro" name="bairro" value="<?=@$endereco['bairro']?>" required="">

    <label for="email"><b>Cidade:</b></label>
    <input type="text" placeholder="Cidade" name="cidade" value="<?=@$endereco['cidade']?>" required="">
    
   <label for="email"><b>Cep:</b></label>
   <input type="text" placeholder="00000000" name="cep" value="<?=@$endereco['cep']?>" required="">

                <?php
if(ehPost()){
    foreach ($errors as $erro){
        echo "$erro<br>";
    }
}
?>                
 <button type="submit" class="signupbtn">Confirmar</button>
