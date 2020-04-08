<?php 
// Survey Model nº 1
session_start();
// Servirá como modelo para futuras consultas 

require_once "conn_ad.php";


    
    // Dar aviso 
    if(isset($_SESSION['aviso'] )) {
        echo $_SESSION['aviso'] ;
        unset($_SESSION['aviso']);
    }

    $sql = "SELECT * FROM anuncios";

    $result = mysqli_query($conn_ad , $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['id']; // Chama a id do anuncio
            echo $row['adname']; // Chama o nome do anúncio
            echo $row['dataclick']; // Guarda no banco a data em que este usuário clicou
            echo "<a href='process_survey.php?id=" .$row['id'] ."'>Enviar </a><br><hr>";
        }


?>