<?php 
session_start();

require_once "../conn.php";

// 
$username = $userpass = $usermail = '';
$nameerr = $passerr = $mailerr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$input_name = trim($_POST['username']);
	
}

?>