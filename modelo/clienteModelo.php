<?php

function adicionarUsuario($nomeUsuario, $email, $senha, $cpf, $datadenascimento, $sexo, $tipoUsuario) {
    $sql = "INSERT INTO usuario (nomeUsuario, email, senha, cpf,datadenascimento, sexo, tipoUsuario) 
            VALUES ('$nomeUsuario', '$email', '$senha', '$cpf','$datadenascimento', '$sexo', '$tipoUsuario')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar usuario' . mysqli_error($cnx));
    }
    return 'Usuario cadastrado com sucesso!';
}

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $linha;
    }
    return $clientes;
}

function pegarUsuarioPorId($id) {
    $sql = "select * from usuario where idUsuario = $id";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = mysqli_fetch_assoc($resultado);
    return $clientes;
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE idUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar usuario' . mysqli_error($cnx));
    }
    return 'usuario deletado com sucesso!';
}

function pegarUsuarioPorEmailSenha($email,$senha){
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function editarUsuario($idUsuario, $nomeUsuario, $email, $senha, $cpf, $datadenascimento, $sexo, $tipoUsuario) {
    $sql = "update usuario set nomeUsuario = '$nomeUsuario', email ='$email',senha ='$senha', cpf ='$cpf', datadenascimento ='$datadenascimento', sexo ='$sexo', tipoUsuario = '$tipoUsuario' where idUsuario='$idUsuario'";
    echo $sql;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar usuario' . mysqli_error($cnx));
    }
    return 'Usuario alterado com sucesso!';
}
?>



