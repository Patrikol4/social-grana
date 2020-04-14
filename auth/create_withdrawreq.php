<?php 
session_start();
require_once "../conn.php";

?>

<?php 
	

	if(isset($_SESSION['logado'])){
		$sql = "INSERT INTO withdraws";

		} else { echo "Desculpe. Ocorreu um erro ao tentar solicitar o saque. Tente novamente mais tarde :/";}
	
?>