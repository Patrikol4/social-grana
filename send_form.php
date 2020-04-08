<?php 

require_once "conn.php";

// Criar as colunas com os nomes abaixo 
// Juntamente com a criação da tabela formdata


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Se forem vazios os valores dentro das strings nome e email
if(empty($_POST["name"]) || empty($_POST["email"])){
    header("Location: index.php?error&emptyName=" .$name . "&emptyEmail=". $email );
    exit();

}
// Se a mensagem estiver toda vazia..

if(empty($_POST["message"])){
    header("Location: index.php?error&emptyMsg" . $message);
    exit();
// Se o usuário tiver sucesso em enviar a mensagem
} else {
    header("Location: index.php?success");
    echo "<p>Sua mensagem foi enviada com êxito. Em breve nossa equipe a responderá!</p>";
    exit();
}

?>