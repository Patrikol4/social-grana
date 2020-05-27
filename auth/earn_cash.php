<?php 
session_start();
require_once "../conn.php";

?>

<?php 

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>Ganhe Dinheiro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- ChartJS : Para os gráficos -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          SocialGrana
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
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

          <li class="nav-item active">
          <a class="nav-link" href="earn_cash.php">
            <i class="material-icons">public</i>
            <p>Ganhar dinheiro</p>
          </a>
          </li>
          
          <li class="nav item">
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
            <a class="navbar-brand" href="javascript:void(0)">Painel de Controle
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
                $ip = $_SERVER['REMOTE_ADDR']; // Mostra o IP do usuário
                  echo "Bem vindo " .$_POST['username']."seu IP atual é o  " . $ip;
            ?>
           </p>
            <?php 
            date_default_timezone_set("America/Sao_Paulo");
            setlocale(LC_ALL, "pt-BR", "pt-BR.utf-8", "portuguese");
            echo "<h4>Hoje é " . ucwords (strftime("%A")) . "</h4>";?>


            
            
              <!--Início dos gráficos do painel-->
              <div class="row">
                <div class="col-xl-6 col-lg-12"> <!--Gráfico ref. aos ganhos-->
                  <div class="card card-chart">
                    <div class="card-header card-header-success">
                      <div id="ganhosDiarios" class="ct-chart">
                      <!--Gráfico em SVG-->
                      <canvas id="bar-chart" height="100%"></canvas>
<script>
// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'line',
    data: {
      labels: ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado","Domingo" ],
      datasets: [
        {
          label: "Ganhos ",
          backgroundColor: ["#3cba9f", "#3cba9f","#3cba9f","#3cba9f","#3cba9f", "#3cba9f", "#3cba9f"],
          data: [0,0,0,0,0,0,0]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false,
        text: 'Ganhos referentes a semana'
      }
    }
});
</script>
                      
                      
                        </div>
                      </div>
                    <div class="card-body">
                      <h4 class="card-title">Ganhos diários</h4>
                        <p class="card-category">Ganhos calculados e atualizados a cada 24 horas.</p>
                    </div>
                      
                      <div class="card-footer">
                        <div class="stats">
                        
                        </div> <!--Stats Close-->
                        <button class="btn btn-success btn-block">
                        <i class="material-icons">account_balance</i>
                        <a href="total_earnings.php">Ganhos totais</a>
                  </button>
                      </div> <!--Card Footer close-->

                    </div>

                  </div>
                  <div class="col-xl-6 col-lg-12">
                    <div class="card card-chart">
                      <div class="card-header card-header-success">
                        <div id="taxaRef" class="ct-chart">
                          
                          
                          <canvas id="bar-chart1" height="100%"></canvas>
<script>
// Bar chart
new Chart(document.getElementById("bar-chart1"), {
    type: 'line',
    data: {
      labels: ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"],
      datasets: [
        {
          label: "Dia da semana",
          backgroundColor: ["#252e28", "#252e28","#252e28","#252e28","#252e28"],
          data: [0,0,0,0,0,0,0] // Valores puxados diretamente do MYSQLI
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false,
        text: 'Referências conseguidas durante a semana'
      }
    }
});
</script>
                          
                        </div>
                      </div>
                      <div class="card-body">
                        <h4 class="card-title">Referidos Diretos</h4>
                          <p class="card-category">
                          
                          Caso queira ver dados mais detalhados clique no botão abaixo. </p>
                          
                        <div class="card-footer">
                          <div class="stats">
                          
                          </div>
                        <button class="btn btn-success btn-block">
                        <i class="material-icons">details</i>
                        <a href="user_refferals.php">
                        Mais Informações
                        </a>
                        </button>
                        </div>
                      </div>
                    
                      


                    </div>

               
                  </div>

                  
                </div>                 
                
                  <div class="card">
                <div class="card-header card-header-success">
              <h3>Novidades <i class="material-icons">new_releases</i></h3>
            </div>
                <div class="card-body">
              <div class="card-title">
                <h4 class="card-title">
                Acompanhe aqui as atualizações referentes a nossa plataforma em primeira mão.
                </h4>
                <p>Atualização #1 </p>
              </div>
            </div>

              </div>
            </div>

        
            
           


        </div>
       

      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <!-- Chartist JS -->
  <script src="js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.js?v=2.1.0"></script>

    
 
</body>

</html>
