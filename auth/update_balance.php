<?php 
session_start();



$conn = new mysqli("localhost", "root", "", "recargabr");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Seus Pontos</title>
</head>
<body>

<?php 

	
		/*
		$sqlone = "SELECT id, balance FROM users";

		$resultone = $conn->query($sqlone);

		if($resultone->num_rows > 0){
		
		while($row = $resultone->fetch_assoc()) {
			echo "Olá! Você atualmente tem " .$row['balance'] . " pontos acumulados. ";
		exit();	
		}

		
}		else {
			echo "Erro ao mostrar o saldo. Tente novamente";
}

		$conn->close();

*/

		



		$sql = "UPDATE users SET balance ='2' WHERE id = 1";

		if($conn->query($sql) === true){
		echo "<h1>"."Seus pontos foram contabilizados no sistema :) " . "</h1>";
	} else {
		echo "Erro. Tente novamente mais tarde." .$conn->error;
	}
		

		// 


		$select = "SELECT balance FROM users";

		$result = num_rows($select);
	



?>


</body>
</html>
	



