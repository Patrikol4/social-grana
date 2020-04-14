<?php 
session_start();
require_once "../conn.php";

?>

<?php 

 

 
?>

<!doctype html>
<html lang="en">

<head>
  <title>Editar Perfil</title>
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
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="javascript:void(0)">Perfil de Usuario
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
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">
                      <p>Bem-vindo novamente, 
                      
                      <?php 
                        if(isset($_SESSION['logado'])) {
                            echo $_SESSION['username'] . " Hoje é dia " . date("d/m/Y");
                          } else {
                            echo " Fulano";
                          }?>
                              
                      </p>
                      </h4>
                   

                    <p class="card-category">Edite suas informações e após terminar, clique no ícone para salvar.</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">

                        <thead class="text-primary">
                          
                          

                          <!--Cabeçalho da TABELA-->
                          <tr>
                         
                            
                            <th>Nome de Usuário</th>
                            <th>E-mail</th>
                            <th>Mudar senha</th>
                            <th>E-mail para Pagamentos</th>
                            <th>Endereço</th>
                            
                            
                            <th>Ações</th>
                            
                            
                          </tr>

                        </thead>
                         <!--Fechamento do cabeçalho da tabela-->
                         
                        <!--Início do Corpo da Tabela-->
                        <tbody>
                          <form action="update_profiledata.php">
                        <?php 
                          // Exibindo os dados do MySQL diretamente na página
                        ?>
                        <tr>
                        <?php 
                          // Aplicar sistema CRUD abaixo!
                        $sqlone = "SELECT username FROM users WHERE id = 1";
                        $result = $conn-> query($sqlone);
                     
                        ?>
                        <td>

                        <input type="text" class="form-control" name="username" placeholder="">
                        </td>
                        <td>

                        <?php 
                          $sql = "SELECT usermail FROM users WHERE id = 1";
                          $result = $conn -> query($sql);
                        ?>

                        <input type="text" class="form-control" name="usermail" placeholder="">

                       
                        </td>
                        
                        <td>
                        <?php 
                        $sql = "SELECT userpass FROM users WHERE id = 1";
                        $result = $conn -> query($sql);

                          ?>

                      <input type="password" class="form-control" name="" 
                      placeholder="<?php 
                        if(isset($_SESSION['logado'])){
                      echo '$row['.  'userpass'. ']'; } ?>">

                        
                        </td>
                        
                        <td>
                        <?php 
                          $sql = "SELECT withdrawaddr FROM users WHERE id = 1";
                          $result = $conn ->query($sql);
                            if(isset($_SESSION['logado'])) {
                              if($result-> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                              echo $row['withdrawaddr'];
                            }
                          }
                        }
                        ?>
                      <input type="text" class="form-control" name="withdrawaddr" placeholder="">

                       
                        </td>
                        <td>
                        <?php 
                          $sql = "SELECT address FROM users WHERE id = 1";
                          $result = $conn ->query($sql);
                            if(isset($_SESSION['logado'])) {
                              if($result -> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                                  echo $row['address'];
                            }
                          }
                        }
                        ?>
                        <input type="text" class="form-control" name="address" placeholder="">
                        
                       
                        </td>

                        <?php 
                            
                          // $update = "UPDATE * FROM users"; 
                        ?>
                        <td>


                        <?php
                          // Pontos adquiridos
                       
                          ?>
                        
                        </td>
                        <td> 
                        <?php
                          // Funcao update
                          echo "<a class='btn btn-info btn-round' href='change_profiledata.php'>" . " Salvar Tudo"
                          ."<i class='material-icons'>"."done_all"."</i>"."</a>";
                            
                         ?>
                        
                      
                        

                        </a>
                        </td>

                        <td>
                          <?php 
                          
                          echo "
                          <a class='btn btn-warning btn-round' href='gen_my_refcode.php'>". " Voltar ".
                          "<i class='material-icons'>"."cancel"."</i>".
                          "</a>"
                          
                          ?>
                        
                        </a>                
                        </td>
                        <td>
                          <?php 
                           /* echo 
                            "<a class='btn btn-danger btn-round' href='#'>" . " Editar ".
                            "<i class='material-icons'>" . "build" . "</i>" . "</a>";
                          */
                          ?>
                        </td>

                        <td>
                          <?php 
                            echo "<a class='btn btn-danger btn-round' href='#'>" . "Deletar conta ".
                            "<i class='material-icons'>" . "delete" ."</i>" . "</a>";
                          ?>

                        </td>

                        </tr>

                        
                        
                        
                        
                          </form>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>


        </div>
        
        <?php 
        // include_once "footer.php";?>

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
