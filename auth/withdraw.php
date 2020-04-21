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



    <script>
                            
                            function formatPoints() {
                              var field = document.getElementById('value');
                              var value = field.value;

                              value = value + '';
                              value = parseInt(value.replace(/[\'D']+/g, ''));
                              value = value + '';
                              value = value.replace(/([0-9]{2})$/g, ",$");
                              if(value.length > 6){
                                value = value.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1, $2");
                              }
                            }

                          </script>
</head>
<body class="dark-edition">
    
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="../index.php" class="simple-text logo-normal">
          SocialGrana
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
            <p>Ganhar Dinheiro</p>
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
          <p>
            <?php 
              $sql = "SELECT balance FROM users WHERE id = 1";
           ?>
             
           </p>
           <h3>Fique á vontade para fazer seu saque</h3>
           <h4>Pontos disponíveis : 
           <?php $result = $conn->query($sql); if(isset($_SESSION['logado'])) { if($result ->num_rows > 0){
              while($row = $result ->fetch_assoc()){
                echo $row['balance'];
                  }
                }
              } else { echo "NaN";} ?> </h4>

            
            
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
                        <p class="card-category">Escolha a plataforma de saques e quantos pontos gostaria de converter 
                          <i class="material-icons">attach_money</i>
                        </p>
                        <!--Formas de saque / conversão abaixo -->
                        <?php ?>
                      
                      <div class="card-footer">
                        <div class="stats">
                         
                        
                        </div> <!--Stats Close-->
                        <!--
                        <button class="btn btn-success btn-block" onclick="md.showNotification('top', 'center')">
                        <i class="material-icons">attach_money</i>
                        <a href="#">Converter Pontos</a> 
                      <div class="ripple-container"></div>
                  </button>-->
                      

                          
                          <select class="form-control">
                            <option>MercadoPago</option>
                            <option>Nubank</option>>
                          </select>
                          
                          <input class="form-control" id="value" type="text" onkeyup="formatPoints();" placeholder="Quantia mínima de retirada : 50 pontos">

                          
                                                   
                          
                      </div> <!--Card Footer close-->
                      <button class="btn btn-success btn-block">
                        <i class="material-icons">local_atm</i>
                        <a href="create_withdrawreq.php">
                      Pedir Saque</a></button>
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
                          
                            <div class="table-responsive">
                              <table class="table">
                                <thead class="text-info">
                                  <tr>
                                    <th>ID do Pagamento</th>
                                    <th>Email usado para saque</th>
                                    <th>Quantia do Saque</th>
                                    <th>Data do Pedido</th>
                                    <th>Status</th>
                                    <th>Pedido via</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>

                                    <?php 
                                    // ID 
                                      $sql = "SELECT id FROM withdrawaddr WHERE user_id = 1";
                                       $result = $conn->query($sql);

                                       if(isset($_SESSION['logado'])) {
                                          if($result->num_rows > 0){
                                            while($row = $result -> fetch_assoc()){
                                              echo $row['id'];
                                            }
                                          } 
                                        } else { echo "NaN"; }

                                    ?>


                                    </th>
                                    <th>
                                      <?php 
                                        $sql = "SELECT withdrawaddr FROM withdrawrequests WHERE user_id = 1";
                                        $result = $conn->query($sql);

                                        if($_SESSION['logado']){
                                          if($result->num_rows > 0){
                                            while($row = $result ->fetch_assoc()){
                                            echo $row['withdrawaddr'];
                                            }
                                          }
                                        }
                                        ?>
                                    <!--recebimento@gmail.com-->

                                    </th>
                                    <th>

                                    R$ 50,00

                                    </th>
                                    <th>11/04/2020</th>
                                    <th>
                                      Finalizado
                                      <i class="material-icons">
                                        done_all
                                      </i>
                                    </th>
                                    <th>


                                      <?php


                                      $sql = "SELECT * FROM withdrawrequests";
                                      $result = $conn->query($sql); 
                                      if($_SESSION['logado']){
                                        if($result->num_rows > 0){
                                            echo "Nubank";
                                          }
                                        }

                                      ?>
                                    </th>
                                  </tr>

                                  <tr>
                                    <th>2</th>
                                    <th>recebimento@gmail.com</th>
                                    <th>R$ 150,00</th>
                                    <th>11/04/2020</th>
                                    <th>
                                      Em andamento
                                      <i class="material-icons">schedule</i>
                                    </th>
                                    <th>MercadoPago</th>
                                  </tr>

                                  <tr>
                                    <th>3</th>
                                    <th>recebimento@gmail.com</th>
                                    <th>R$ 300,00</th>
                                    <th>11/04/2020</th>
                                    <th>Cancelada
                                      <i class="material-icons">error_outline</i>
                                    </th>
                                    <th>PayPal</th>

                                  </tr>
                                </tbody>
                              </table>
                            </div>

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