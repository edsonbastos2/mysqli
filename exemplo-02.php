<?php 
//classe nativa do php7-local do banco usuario senha e nome do banco.
$conn = new mysqli("localhost", "root", "", "dbphp7");

// Verificação de erro se acontecer algum erro mostrará essa mensagem.
	if ($conn->connect_error) {
		echo "Error".$conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

	$data = array();
		while ($row = $result->fetch_ASSOC()) {
			
			array_push($data, $row);
		}

		echo json_encode($data);
 ?>