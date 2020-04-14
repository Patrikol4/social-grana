<?php 
session_start();
$_REQUEST['username'] && ['userpass'];

if($_COOKIES['username'] || [ 'userpass'] == true) {
$alter = "UPDATE users SET * WHERE id = ?";
} else {
	echo "Erro na conexão " .mysqli_error();
}



?>

