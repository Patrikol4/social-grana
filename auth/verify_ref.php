<?php 

include_once "conn_up.php";


	$earnRefbonus = $conn -> real_escape_string($_POST['ref']);

	if(isset($_POST['ref_confirm']) || $_SESSION['logado']) || $conn { 
		$sql = "INSERT INTO users WHERE balance VALUES (++100) ";


		



		function update_user_xp($id, $balance $conn) {
    $conn->query("UPDATE pontos_xp
                    SET balance=balance+" . $qtd . " 
                    WHERE id='$user_id'");
}

		// we call this function like:
		update_user_xp(4, 10, $conn); // user_id: 4, update with 10 points
}

		function get_user_xp($id, $conn) {
    	$sql = $conn->query("SELECT users
                           FROM balance
                           WHERE id='$user_id'");
   		$row = $sql->fetch_assoc();
   		return $row['qt_pontos_xp'];

}
// Recompensas
$xp = array(
	'lvl1' => 100, 
	'lvl2' => 2000, 
	'lvl3' => 3000, 
	'lvl4' => 4000, 
	'lvl5' => 5000,
	'lvl6' => 6000,
	'lvl7' => 7000,
	'lvl8' => 8000,
	'lvl9' => 9000,
	'lvl10' => 10000);



?>