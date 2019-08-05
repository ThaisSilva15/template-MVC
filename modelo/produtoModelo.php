<?php

 function adicionarProduto ($preco, $nomeproduto, $descricao, $imagem, $estoque_minimo, $estoque_maximo){
     $sql ="INSERT INTO produto (preco, nomeproduto, descricao, imagem,estoque_minimo,estoque_maximo,idcategoria) VALUES ('$preco', '$nomeproduto', '$descricao', '$imagem', '$estoque_minimo', '$estoque_maximo', 1)";
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
 function deletarProduto ($id){
     $sql = "DELETE FROM produto WHERE idproduto = $id";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if(!$resultado){
         die('Erro ao deletar o Produto' . mysqli_error($cnx));
     }
     return 'Produto deletado com sucesso!';
 }
    function editarProduto($idProduto, $nome, $preco, $descricao, $imagem, $estoque_minimo, $estoque_maximo){
    $sql ="update produto set nome = '$nome', 'preco' ='$preco','descricao' ='$descricao', 'imagem' ='$imagem', 'estoque_minimo' ='$estoque_minimo', 'estoque_maximo' ='$estoque_maximo' where idProduto='$idProduto'";
    $resultado = mysqli_query($cnx = conn (), $sql);
    if (!$resultado) {die('Erro ao alterar produto'. mysqli_error($cnx)); }
    return  'Produto alterado com sucesso!';
}



 ?>
