<?php 
session_start();
require_once "../conn.php";

?>

<?php 
if(isset($_SESSION['logado']){
	if($conn ->query($sql)){
		echo "Sua conta foi deletada.";
		header("Location: ..index.php");
		session_destroy('logado');
		}
	}


?>