<?php 
session_start();
require_once "../conn.php";

?>

<?php 
// Setando o userpoints
$userpoints = $_POST['points'];
$userid = $_POST['id'];

// Inserindo o ponto no banco após a visualização do anúncio
$sql = "UPDATE users SET points $points + 1 WHERE id = ?";

    // Fazendo a função de inserção funcionar!
    if(mysqli_query($conn, $sql)) {

        echo "<b>Parabéns! Pontos adicionados com sucesso.</b>". "<br>" . "<p>Você já pode fechar esta guia.</p>";
    } else {
        echo "Erro. O ponto não foi adicionado. Contate o administrador.";
        //header("Location: ../ads.php");
        exit();
    }

    // Se o usuário não estiver logado

   // if(empty($_POST['username'] || $_POST['userpass'])){
      //  echo "Você precisa estar logado para ver anúncios";
//header("Location: login.php");
    //    exit();
    //} 

?>
