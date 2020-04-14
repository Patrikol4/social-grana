<?php 
session_start();

require_once "../conn.php";
?>

<?php 


	

	$insert = "UPDATE users SET username, usermail, userpass, withdrawaddr, address WHERE id = 1"; 

	if($_SESSION['logado']){
		if($conn ->query($sql) == true){
			echo "<h1>Dados Alterados com Sucesso!</h1>";
			header("Location: perfil_usuario.php");
		}
	}



?>