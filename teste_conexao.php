<?php
	include("conexao.php");

	echo "<h2>Conexão bem-sucedida com o banco de dados</h2>";

	mysqli_close($conexao);
?>