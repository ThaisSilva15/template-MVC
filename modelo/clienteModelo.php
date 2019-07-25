<?php

function adicionarCliente($nome,$email,$senha,$cpf,$nascimento,$sexo,$tipoCliente){
	$sql = "INSERT INTO cliente 
			VALUES(
				NULL,
				'$nome',
				'$email',
				'$senha',
				'$cpf',
				'$nascimento',
				'$sexo',
				'$tipoCliente'
			)";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao cadastrar produto. Erro: '.mysqli_error(conn()));
	}
	return 'Produto cadastrado com sucesso!';
}

function editarCliente($id,$nome,$email,$senha,$cpf,$nascimento,$sexo,$tipoCliente){
	$sql = "UPDATE cliente 
			SET nome='$nome',
				email='$email',
				senha='$senha',
				cpf='$cpf',
				nascimento='$nascimento',
				sexo='$sexo',
				tipoCliente='$tipoCliente' 
			WHERE idCliente='$id'
			";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao alterar dados do cliente. Erro: '.mysqli_error(conn()));
	}
	return 'Dados alterados com sucesso!';
}

function deletarCliente($id){
	$sql = "DELETE FROM cliente WHERE idCliente='$id'";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao remover o cliente. Erro: '.mysqli_error(conn()));
	}
	return 'Cliente removido com sucesso!';
}

function visualizarCliente($id){
	$sql = "SELECT * FROM cliente WHERE idCliente='$id'";
	$resultado = mysqli_query(conn(),$sql);
	$cliente = mysqli_fetch_assoc($resultado);
	return $cliente;
}

function listarClientes(){
	$sql = "SELECT * FROM cliente";
	$resultado = mysqli_query(conn(),$sql);
	$clientes = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$clientes[] = $linha;
	}
	return $clientes;
}

function pegarClienteviaEmailSenha($email, $senha){
	$sql = "SELECT * FROM cliente WHERE email='$email' AND senha='$senha'";
	$resultado = mysqli_query(conn(),$sql);
	$cliente = mysqli_fetch_assoc($resultado);
	return $cliente;
}

?>