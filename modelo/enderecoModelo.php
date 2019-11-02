<?php
 
function adicionarEndereco( $idusuario,$logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    $sql ="INSERT INTO endereco (idusuario,logradouro, numero, complemento, bairro, cidade, cep) 
            VALUES ('$idusuario','$logradouro', '$numero', '$complemento', '$bairro','$cidade', '$cep')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if (!$resultado) { die('Erro ao cadastrar endereco' . mysqli_error ($cnx));}
    return 'Endereço cadastrado com sucesso!';    
}

function pegarTodosEndereco(){
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $endereco[]= $linha;
    }
    return $endereco;
}

function pegarEnderecoPorId($id){
    $sql = "select * from endereco where idendereco= $id";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = mysqli_fetch_assoc($resultado);
    return $endereco;
}

function deletarEndereco ($id){
    $sql = "DELETE FROM endereco WHERE idendereco = $id";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar endereco' . mysqli_error($cnx));
    }
    return 'Endereço deletado com sucesso!';
}

function deletarEnderecoPorCliente($idCliente){
    $sql = "DELETE FROM endereco WHERE idusuario = '$idCliente'";
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar endereco' . mysqli_error($cnx));
    }
    return 'Endereço deletado com sucesso!';
}

function editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro,$cidade, $cep){
    $sql ="update endereco set logradouro = '$logradouro', numero ='$numero',complemento ='$complemento', bairro ='$bairro', cidade ='$cidade', cep ='$cep' where idendereco='$idendereco'";
    echo $sql;
    $resultado = mysqli_query($cnx = conn (), $sql);
    if (!$resultado) {die('Erro ao alterar endereco'. mysqli_error($cnx)); }
    return  'Endereço alterado com sucesso!';
}

function pegarEnderecosPorUsuario ($idUsuario){
    $sql = "SELECT * FROM endereco WHERE idusuario= $idUsuario";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $endereco[]= $linha;
    }
    return $endereco;
}


?>
