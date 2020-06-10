<?php 

	
	if(isset($_COOKIE['logado'])){
		echo "Seja bem-vindo novamente!";
	} else {
		echo 'Hm. Parece que essa é sua primeira vez aqui.';
	}

?>