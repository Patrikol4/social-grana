<?php 
session_start();

include "../conn.php";

?>

<?php 
// Referencias aqui : https://stackoverflow.com/questions/14142677/how-to-use-getelementsbyclassname-in-javascript-function
ini_set('max_execution_time', 0); 

if(empty($_SESSION['i'])){
    $_SESSION['i'] = 0;
}

$total = 100;
for ($i=$_SESSION['i']; $i < $total; $i++){
    $_SESSION['i'] = $i;
    $percent = intval($i/$total * 100) . "%";

    sleep(1);

    echo '
    <script>
    parent.document.getElementById("progress-bar").innerHTML="<div style=\"width:'.$percent.';background:linear-gradient(to bottom, rgba(125,126,125,1) 0%,rgba(14,14,14,1) 100%); ;height:35px;\">&nbsp;</div>";
    parent.document.getElementById("information").innerHTML="<div style=\"text-align:center; font-weight:bold\">'.$percent.' is processed.</div>";
    </script>';


    ob_flush();
    flush();
   


}

echo '<script>
parent.document.getElementById("information").innerHTML="<div style=\"text-align:center; font-weight:bold\">
Anúncios visualizados por completo! Seus pontos já foram contabilizados!</div>";
</script>';

session_destroy();

?>