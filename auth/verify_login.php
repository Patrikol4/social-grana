    <?php 
    session_start();
    require_once "../conn.php";
    



    $username = mysqli_real_escape_string($conn, $_POST ['username']);
    $userpass = mysqli_real_escape_string($conn, $_POST ['userpass']);
   
    $query = "SELECT * FROM users WHERE username = '{$username}' AND userpass = '{$userpass}' ";
    
    $result = mysqli_query($conn, $query);
  
    $row = mysqli_num_rows($result);
 
    if($result = $row > 0){
       
       $_SESSION['logado'] = true;
        header('Location: dashboard.php');
        
    } else {
        // A sessão retornará forbidden e levará o usuario novamente
        // Para a página de login.
        $_SESSION['nao_logado'] = true;
        header('Location: login.php');
        exit();
    }

?>
