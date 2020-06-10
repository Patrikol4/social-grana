<?php 

	session_start();

	if(isset($_SESSION['username'])){
		echo "Bem-vindo novamente, {$_SESSION['username']}";
	} else {
		echo "Boas vindas...";
		$_SESSION['username'] = 'Anonimo';
	}

?>