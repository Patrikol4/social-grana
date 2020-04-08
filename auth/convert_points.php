<?php 
session_start();
require_once "..conn.php";
// include "process_withdraw"; -> este que irá jogar o pedido de saque para uma nova tabela com o nome
// 'saques'

// Esse script servira para contar e fazer a conversao de pontos do usuario
// É muito importante que esteja devidamente organizado com as funções nomeadas cada qual com sua tarefa.


// Passando a string e conectando-a ao bd
$id = mysqli_real_escape_string($conn, $_SESSION ['id']);
$query = "SELECT FROM users where id = '{$id}'";


// Mostrar aviso de sucesso caso 
do {

    echo "Conversão de " . $pontos ."pontos bem sucedida";
    $pontos--;
} while($pontos = 1000);

    // Atualiza a tabela users na coluna points onde o id do usuário é ...    
    $updateValue = "UPDATE users SET points WHERE id = ?";
    




// Deixa quieta essa função
if ($_SESSION['userpoints'] < 1000 ){ 
    // Se a quantidade de pontos for menor que a mínima pra trocar, ex : 1000pts
    echo "Pontos insuficientes para conversão. Consiga mais.";

}
?>
