<?php 
    session_start();
    require_once "../conn.php";
    
    // Verificando se os dados estão ou não vazios
    if (empty($_POST['username'] || $_POST['userpass'])) {
        header("Location: login.php");
        exit();
    } 
    // 
    $username =  mysqli_real_escape_string($conn, $_POST['username']);
    $userpass = mysqli_real_escape_string($conn, $_POST['userpass']);
    $userpoints = mysqli_real_escape_string($conn, $_POST['points']);

    $query = "SELECT * FROM users WHERE username '{$username}' , userpass '{$userpass}' AND points '{$userpoints}'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);

    if($row > 0){
        $_SESSION['username'] = $username;
        echo "Bem-vindo de volta. Seus ganhos totais são de : " . $userpoints . "pontos";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhos totais</title>
</head>
<body>
    
</body>
</html>