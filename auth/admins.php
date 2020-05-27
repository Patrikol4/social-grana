<?php require_once "../conn.php" ;?>
<?php require_once "Functions.php" ; ?>

<?php 

if(isset($_POST['username'])){
	$username = $_POST['username'];
	$usermail = $_POST['usermail'];
	$userpass = $_POST['userpass'];
	$admin = $_SESSION['username'];
	date_default_timezone_set('America/Sao Paulo');
	$HoraAtual = time();
	$HoraeData=strftime($HoraAtual);
}

?>