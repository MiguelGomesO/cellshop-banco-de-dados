<?php
	$servidor = "localhost";
	$usuario = "miguelgomes";
	$senha = "Farpador250701!";
	$banco = "DB_Miguel";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

	if(!$conexao){
		die("Erro ao conectar ao banco de dados: " . mysqli_connect_error);
	}
?>