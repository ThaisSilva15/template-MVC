<?php

 function adicionarCupom($nomecupom, $desconto){
     $sql ="INSERT INTO categoria (nomecupom, desconto) VALUES ('$nomecupom', '$desconto')";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if (!$resultado) { die('Erro ao cadastrar o cupom' . mysqli_error ($cnx));}
     return 'Cupom cadastrado com sucesso!';    
 }
 function pegarTodasCupom(){
     $sql = "SELECT * FROM cupom";
     $resultado = mysqli_query(conn(), $sql);
     $cupom = array();
     while ($linha = mysqli_fetch_assoc($resultado)){
         $cupom[]= $linha;
     }
     return $cupom;
 }
 function pegarCupomPorId($id){
   $sql = "select * from cupom where idcupom= $id";
     $resultado = mysqli_query(conn(), $sql);
     $cupom = mysqli_fetch_assoc($resultado);
     return $cupom;
 }
 function deletarCupom ($id){
     $sql = "DELETE FROM cupom WHERE idcupom = $id";
     $resultado = mysqli_query ($cnx = conn(), $sql);
     if(!$resultado){
         die('Erro ao deletar a cupom' . mysqli_error($cnx));
     }
     return 'Cupom deletado com sucesso!';
 }

 function editarCupom($idcupom,$nomecupom, $desconto){
    $sql ="update cupom set  descricao ='$descricao', nomecupom ='$nomecupom',desconto ='$desconto' where idcupom='$idCupom'";
    $resultado = mysqli_query($cnx = conn (), $sql);
    if (!$resultado) {die('Erro ao alterar cupom'. mysqli_error($cnx)); }
    return  'Cupom alterado com sucesso!';
}

 
 ?>
