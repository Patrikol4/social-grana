<?php 

require_once "conn_up.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gerando código de referencia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-sm">
	<?php 
	// Gerando o algoritmo de refcode com base alfanumérica 

	$values = '0123456789abcdefghijklmnopqrstuvwxyz';

	
	echo "<h1>" . "O seu código de referência é " . substr(str_shuffle($values), 0, 10) . "</h1>";

	$refcode = substr(str_shuffle($values), 0,10);
		
		if($conn){
		$insert = "INSERT INTO users WHERE refcode = $values"; 
		echo "Os valores foram inseridos com sucesso" . $refcode;
	}
		else {
		echo "<h2>". "Conecte ao banco de dados para salvar a string." . "</h2>";
	}
?>

	<div class="col-sm">
		Propaganda de banner
		</div>

	<div class="col-sm">
		Outra propaganda de banner
	</div>

</div>
	</div>
		</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>



