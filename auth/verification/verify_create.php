<?php 
require_once "../conn.php";

	$username = $_POST['username'];
	$userpass = $_POST['userpass'];
	
	// Se os dois campos estiverem vazios
	

	// Inserir dados dentro da tabela 
	$sql = "INSERT INTO users (username, userpass) VALUES (?, ?, ?) ";
	$stmt = mysqli_stmt_init($conn); // Insere a conexão
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: register.php");
		exit();
	}
	else {
		// Criptografar a senha 
		$hashuserpass = password_hash($userpass, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "sss", $username, $userpass);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		header("Location: register_success.php"); // Após registro.
		exit();
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	

?>