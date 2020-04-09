    <?php 
    session_start();
    require_once "../conn.php";
    // Se o nome de usuario e a senha estiverem vazios
    // Redireciona para a mesma página.
    if(empty($_POST['username']) || empty($_POST['userpass'])){
        header('Location: /login.php');
        exit();
    }
    // Passando a string por um método de criptografia
    $username = mysqli_real_escape_string($conn, $_POST ['username']);
    $userpass = mysqli_real_escape_string($conn, $_POST ['userpass']);
    // Selecionando na tabela USERS os valores username e userpass.
    $query = "SELECT * FROM users WHERE username = '{$username}' AND userpass = '{$userpass}' ";
    $result = mysqli_query($conn, $query);
    // Dando o resultado dentro da Row
    $row = mysqli_num_rows($result);
    // Se a Row for maior que zero
    // Roda o códig logado 
    if($row > 0){
        $_SESSION['logado'] = $username || $userpass;
       
        header('Location: dashboard.php');
        exit();
    } else {
        // A sessão retornará forbidden e levará o usuario novamente
        // Para a página de login.
        $_SESSION['forbidden'] = true;
        header('Location: login.php');
        exit();
    }
?>