<?php

session_start();
	// O get dentro do logout se relaciona ao botão na página anterior 
session_destroy();
		
	echo "Voce foi deslogado<br>";
	echo "<b>Redirecionando você em 10 segundos.</b>";
	header('Location: login.php');
?>
