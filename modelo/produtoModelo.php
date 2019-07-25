<?php

function adicionarProduto($categoria, $nome, $preco, $descricao, $imagem, $est_min, $est_max){
	$sql = "INSERT INTO produto 
			VALUES(	
				NULL,
				'$categoria',
				'$nome',
				'$preco',
				'$descricao',
				'$imagem',
				'$est_min',
				'$est_max'
			)";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao cadastrar produto. Erro: '.mysqli_error(conn()));
	}
	return 'Produto cadastrado com sucesso!';
}

function editarProduto($id, $categoria, $nome, $preco, $descricao, $imagem, $est_min, $est_max){
	$sql = "UPDATE produto 
			SET idCategoria='$categoria',
				nome='$nome',
				preco='$preco',
				descricao='$descricao',
				imagem='$imagem',
				est_min='$est_min',
				est_max='$est_max' 
			WHERE idProduto='$id'
			";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao alterar produto. Erro: '.mysqli_error(conn()));
	}
	return 'Produto alterado com sucesso!';
}

function deletarProduto($id){
	$sql = "DELETE FROM produto WHERE idProduto='$id'";
	$resultado = mysqli_query(conn(), $sql);
	if (!$resultado) {
		die('Erro ao remover produto. Erro: '.mysqli_error(conn()));
	}
	return 'Produto removido com sucesso!';
}

function visualizarProduto($id){
	$sql = "SELECT * FROM produto WHERE idProduto='$id'";
	$resultado = mysqli_query(conn(),$sql);
	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
}

function listarProdutos(){
	$sql = "SELECT * FROM produto";
	$resultado = mysqli_query(conn(),$sql);
	$produtos = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$produtos[] = $linha;
	}
	return $produtos;
}

?>