<?php 

date_default_timezone_set('America/Sao_Paulo');
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
	
	function queryMysql($query){
		global $conn;
		$result = $conn ->query($query);
		if(!$result) die ($conn->error);
		return $result; 
	}
	function destorySession(){
		$_SESSION = array();
		if(session_id()!= "" || isset ($_COOKIE[session_name()]))
			setcookie(session_name(), '', time()- 2592000, '/');
		session_destroy();
	}
	function sanitizeString(){
		global $conn;
		$var = strip_tags($var);
		$var = htmlentities($var);
		$var = stripslashes($var);
		return $conn->real_escape_string($var);
	}
	function showProfile($user){
		if(file_exists("$user.jpg"))
			echo "<img src='$user.jpg' style='float: center;'";
		$result = 
		queryMysql("SELECT * FROM perfis WHERE user = '$user'");

		if($result->num_rows){
			$row = $result->fetch_array(MYSQL_ASSOC);
			echo stripcslashes($row['text']). "<br style = 'clear: left;'";
		}
	}


?>