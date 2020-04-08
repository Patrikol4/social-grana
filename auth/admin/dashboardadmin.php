<?php 
session_start();
// Data
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "recargabr";


$conn = new mysqli($host, $user, $pass, $dbname ); // Connect with db using parameters especified above.


// Check conn
if(!$conn) {
	die ("Conexao mal sucedida" .mysqli_connect_errno());
} 



?>

<!doctype html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <?php include_once "../navbar.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <h3> 
          <?php 
            $query = 'SELECT id, username, email FROM users';
            $result = mysqli_query($conn, $query );

            if(mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "ID "  .$row["id"]. " NOME" . $row ["username"];
              } 
            } else { echo "Erro na busca pelos atributos acima requisitados." ;}
            
            ?>
            </h3> 
            <!--Corrigir erro-->

            <h3>
            
            Seja muito bem-vindo, <?php 'SELECT username FROM users WHERE username ' ?> 
            
            </h3>
          


        </div>
        <?php include_once "../footer.php";?>

      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>

    
 
</body>

</html>
