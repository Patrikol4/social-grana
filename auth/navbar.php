<?php 

require_once "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

</head>
<body>

<!--é aqui onde começa a navbar esquerda fixada no topo-->

<div class="wrapper ">
        <div class="sidebar" data-color="orange" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
            <div class="logo">
            <a href="recargabr.xyz" class="simple-text logo-normal">RECARGABR</a>
            </div>

            <div class="sidebar-wrapper">
            <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Painel de Controle</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="perfil_usuario.php">
              <i class="material-icons">person</i>
              <p>Perfil de Usuario</p>
            </a>
          </li>
          <li class="nav-item ">
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
          <li class="nav-item active">
            <a class="nav-link" href="withdraw.php">
              <i class="material-icons">account_balance_wallet</i>
              <p>Sacar Dinheiro</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
          </ul>
      </div>
    </div>

<!--não vai ser necessário inserir header, tampouco footer-->
    
