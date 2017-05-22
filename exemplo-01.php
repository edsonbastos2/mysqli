<?php 
//classe nativa do php7-local do banco usuario senha e nome do banco.
$conn = new mysqli("localhost", "root", "", "dbphp7");

// Verificação de erro se acontecer algum erro mostrará essa mensagem.
	if ($conn->connect_error) {
		echo "Error".$conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(?,?)");

	$stmt->bind_param("ss", $login, $pass);
	
	$login = "edson";
	$pass = "redhot";
	$stmt->execute();
 ?>