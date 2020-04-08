<?php 
    session_start();
    require_once "../conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retire seu dinheiro</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
    <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>
<body class="dark-edition">
    
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
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
          <li class="nav-item  ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p>Painel de Controle</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li class="nav-item ">
            <a class="nav-link" href="perfil_usuario.php">
              <i class="material-icons">person</i>
              <p>Perfil de Usuário</p>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="user_refferals.php">
            <i class="material-icons">content_paste</i>
            <p>Referências</p>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="ads.php">
            <i class="material-icons">public</i>
            <p>Ver Anúncios</p>
          </a>
          </li>
          
          <li class="nav item active">
            <a class="nav-link" href="withdraw.php">
              <i class="material-icons">account_balance_wallet</i>
                <p>Sacar Dinheiro</p>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="material-icons">input</i>
              <p>Logout</p>
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
            <a class="navbar-brand" href="javascript:void(0)">Saques
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
                  <i class="material-icons">notifications</i>
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
          <p><?php 
              $sql = "SELECT points FROM users";
           ?></p>
           <h3>Fique á vontade para fazer seu saque</h3>
           <h4>Pontos disponíveis : 
           <?php 

            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);

            if(isset($_SESSION['points'])) {          
            echo $row['points'];} ?>
            </h4>

            
            
              <!--Início dos gráficos do painel-->
              <div class="row">
                <div class="col-xl-12 col-lg-12"> <!--Gráfico ref. aos ganhos-->
                  <div class="card card-chart">
                    <div class="card-header card-header-success">
                    Forma de saque 
                      <div id="ganhosDiarios" class="ct-chart">
                      <!--Gráfico em SVG-->
                      

                      
                      
                        </div>
                      </div>
                    <div class="card-body">
                      <h4 class="card-title">Conversão de pontos: </h4>
                        <p class="card-category">Escolha como gostaria de converter seus pontos </p>
                        <!--Formas de saque / conversão abaixo -->
                        <?php ?>
                      
                      <div class="card-footer">
                        <div class="stats">
                        
                        </div> <!--Stats Close-->
                        <button class="btn btn-success btn-block">
                        <i class="material-icons">attach_money</i>
                        <a href="convert_points.php">Converter Pontos</a> <!--Chama a função de converter-->
                  </button>
                      </div> <!--Card Footer close-->

                    </div>

                  </div>
                  <div class="col-xl-12 col-lg-12">
                    <div class="card card-chart">
                      <div class="card-header card-header-info">
                      Seus saques anteriores
                        <div id="taxaRef" class="ct-chart">
                          
                          
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <h4 class="card-title">Histórico de Saques</h4>
                          <p class="card-category">
                          
                          Esse é o seu histórico de todos os saques / Conversões </p>
                          
                        <div class="card-footer">
                          <div class="stats">
                          
                          </div>
                        
                        </div>
                      </div>

                    </div>
                  </div>

                  
                </div>                 
                
              
              </div>
            </div>

        

          


        </div>
       

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