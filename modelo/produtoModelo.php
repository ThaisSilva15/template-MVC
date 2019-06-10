<?php

 function adicionarProduto($nome,$codigo, $valor){
     $sql ="INSERT INTO produto (nome, codigo, valor) VALUES ('$nome', '$codigo', '$valor')";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if (!$resultado) { die('Erro ao cadastrar o produto' . mysqli_error ($cnx));}
     return 'Produto cadastrado com sucesso!';    
 }
 function pegarTodosProduto(){
     $sql = "SELECT * FROM produto";
     $resultado = mysqli_query(conn(), $sql);
     $produto = array();
     while ($linha = mysqli_fetch_assoc($resultado)){
         $produto[]= $linha;
     }
     return $produto;
 }
 function pegarProdutoPorId($id){
   $sql = "select * from produto where idproduto= $id";
     $resultado = mysqli_query(conn(), $sql);
     $produto = mysqli_fetch_assoc($resultado);
     return $produto;
 }
 ?>