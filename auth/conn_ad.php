<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "recargabr";

$conn_ad = mysqli_connect($host, $user, $pass, $db);

$sql = "SELECT * FROM anuncios";

?>