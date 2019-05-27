<?php

 function adicionarCategoria($descricao){
     $sql ="INSERT INTO categoria (descricao) VALUES ('$descricao')";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if (!$resultado) { die('Erro ao cadastrar a categoria' . mysqli_error ($cnx));}
     return 'Categoria cadastrado com sucesso!';    
 }
 ?>

