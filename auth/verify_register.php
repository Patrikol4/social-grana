<?php 
session_start();
require "../conn.php";

$username = $_POST['username'];
$userpass = $_POST['userpass'];
// $usermail = $_POST['usermail']; 

if(empty($username) || empty($userpass)){
    header("Location: register.php?error=emptyfields&username=" .$username ."&userpass=" .  $userpass);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: register.php?error=invalidusername&username=", $username);
    exit();

} else {
    $sql = "SELECT username FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: register.php?error=sqlerror");
        exit();
    } 
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_check = mysqli_stmt_num_rows($stmt);

            if($result_check > 0) {
                header("Location: register.php?error=userTaken&username=" . $username);
                exit();
            }

            else {
                $sql = "INSERT INTO users (username, userpass) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: register.php?error=sqlerrors");
                        exit();
                    }
            else {
                mysqli_stmt_bind_param($stmt, "ss", $username, $userpass);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                header("Location: dashboard.php");
                exit();
            }
        }
    }
}

?>