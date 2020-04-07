<?php 


// Data
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "recargabr";


$conn = new mysqli($host, $user, $pass, $dbname ); // Connect with db using parameters especified above.


// Check conn
if(!$conn) {
	die ("Conexao mal sucedida" .mysqli_connect_errno());
} 


?>