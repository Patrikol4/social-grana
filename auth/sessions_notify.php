<?php 
session_start();
// Notificar de erros ocorridos dentro do template referente a dashboard
require_once "../conn.php";

function ErrorMessage(){
	if(isset($_SESSION['ErrorMessage'])){
		$Output = "<div class='alert alert-danger' role='alert'>";
		$Output .= htmlentities($_SESSION['ErrorMessage']);
		$Output .= "</div>";
		$_SESSION['ErrorMessage'] = null;
		return $Output;

	}
}

function SuccessMessage(){
	if(isset($_SESSION['SuccessMessage'])){
		$Output = "<div class='alert alert-success' role='alert'>";
		$Output .= htmlentities($_SESSION['SuccessMessage']);
		$Output .= "</div>";
		$_SESSION['SuccessMessage'] = null;
		return $Output;

	}
}


?>