<?php

 function adicionarProduto($nome,$codigo, $valor){
     $sql ="INSERT INTO produto (nome, codigo, valor) VALUES ('$nome', '$codigo', '$valor')";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if (!$resultado) { die('Erro ao cadastrar o produto' . mysqli_error ($cnx));}
     return 'Produto cadastrado com sucesso!';    
 }
 ?>