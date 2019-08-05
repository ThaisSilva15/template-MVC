<?php

function conn() {
	//$cnx = mysqli_connect("localhost", "id10000745_lojacamithamake", "thaiscamilly", "id10000745_lojacamithamake");
	$cnx = mysqli_connect("localhost", "root", "", "lojaThais");
	if (!$cnx) die('Deu errado a conexao!');
	return $cnx;
}

?>