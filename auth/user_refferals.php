<?php 
session_start();
require_once "../conn.php";

// include "get_ref.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referências</title>

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
            <div class="logo">
            <a href="recargabr.xyz" class="simple-text logo-normal">Social Grana</a>
            </div>

            <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
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

          <li class="nav-item active">
          <a class="nav-link" href="user_refferals.php">
            <i class="material-icons">content_paste</i>
            <p>Referências</p>
            </a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="ads.php">
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
    
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Minhas referências
            </a>
          </div>
    </div>
    </nav>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-warning">
                <h4 class="card-title">Referências</h4>
                <p class="card-category">Suas referências organizadas por data de registro</p>
              </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <tr>
                        <!-- Table Head start -->
                          <th>ID</th>
                          <th>Email do Usuário</th>
                          <th>Bonificação adquirida</th>
                          <th>Data de registro</th>
                          
                          
                          
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <th><b>
                            
                            <?php 
                            // ID
                            // Esse numero não é o id do usuário encontrado na tabela 'users'
                            $sql = "SELECT * FROM referrals WHERE id = 1";
                            $result = $conn -> query($sql);

                              if(isset($_SESSION['logado'])) {
                                if($result ->num_rows > 0){
                                  while($row = $result ->fetch_assoc()){
                                    echo $row['id'];
                                  }
                                } else { echo " ";}
                              } 
                             
                              
                            ?>
                              </b>
                            </th>
                            <th>
                            <?php 
                              $sql = "SELECT usermail FROM referrals WHERE id = 1";
                              $result = $conn ->query($sql);
                            
                             if(isset($_SESSION['logado']) ){
                                if($result ->num_rows > 0){
                                  while($row = $result ->fetch_assoc()){
                                    echo $row['usermail'];
                                  }
                                }
                              } 
                            ?>
                            
                            </th>
                            <th>
                              <?php 

                              $sql = "SELECT ref_date FROM referrals WHERE id = 1";
                              $result = $conn -> query($sql);
                              // Bonus
                              // 
                              // 
                                if(isset($_SESSION['logado'])) {
                                  if($result ->num_rows > 0){
                                    while($row = $result -> fetch_assoc()){
                                      echo $row['ref_bonus'];
                                    }
                                  }
                                  
                                } else {
                                  echo " ";
                                }
                              ?>

                            </th>
                            <th>
                                <?php 
                                $sql = "SELECT ref_bonus FROM referrals WHERE id = 1";
                                $result = $conn -> query($sql);
                                // Ref Date

                                if(isset($_SESSION['logado'])) {
                                  if($result ->num_rows > 0 ){
                                    while($row = $result -> fetch_assoc()){
                                    echo $row['ref_date'];
                                  } 
                                }
                              }
                                ?>
                            </th>
                          
                          </tr>

                          <tr>
                            <th></th> 
                            <th></th>
                            <th></th> 
                            <th></th>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    </div> <!--End Main Panel -->


    <?php //include_once "footer.php"; ?>
     </div>
        </div>
    
</body>
</html>