<?php

require_once "../conn.php";

?>

<?php 


?>

<!doctype html>
<html lang="en">

<head>
  <title>Aguarde...</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />



  <script type="text/javascript">

var count = new Number();
var count = 60;

function start(){

  if ((count - 1) >= 0){
    count -= 1;
    if (count == 0) {
      count = "Prossiga :)";
    }else if(count < 10){
      count = "0"+count;
    }
    tempo.innerText=count;
    setTimeout('start();', 100);

  }
}

</script>
</head>

<body class="dark-edition" onload="start();">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://recargasbr.xyz" class="simple-text logo-normal">
          RecargaBR
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="ads.php">
              <i class="material-icons">dashboard</i>
              <p>Voltar</p>

            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>Fechar janela</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Assistindo anúncio....
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  
                  <p class="d-lg-none d-md-block">
                    Notifications
                  </p>
                </a>
              </li>
              <!-- your navbar here -->
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
            <div class="card">
              <div class="card-header card-header-primary">
                <div class="card-title">
          <h4>Clique no botão abaixo para continuar </h4></div> <!--Fim do card-title -->
            
            <p class="card-category">Aguarde o timer chegar a zero..</p>
            <i class="material-icons">timer</i>

            <br>
            <div id="tempo"></div>
              
       
          
            
            
              </div> <!--Fim do card header-->

            <div class="card-body">

          <button class="btn btn-info" type="submit"><a href="surf.php">Clique aqui para continuar</a> </button></div> <!--Fim da class-body -->
            </div>
          
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  
  <!-- Chartist JS -->
  <!--  Notifications Plugin    -->

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>

    
 
</body>

</html>