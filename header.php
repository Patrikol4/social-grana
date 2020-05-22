<?php 

require_once "conn.php";


// 



?>


<html>

<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>SOCIAL GRANA</title>

	  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    <link href="assets/css/examples.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>




</head>

<body>

<nav class="navbar navbar-ct-danger" role="navigation-demo" id="demo-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SocialGrana</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-3">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="tutorial.php" class="btn btn-simple">Como ganhar</a>
            </li>
            <li>
                <a href="paymentproofs.php" class="btn btn-simple">Provas de Pagamento</a>
            </li>
            <li>
            <?php 
              //if($username && $userpass == true) {
               // echo '<a href="auth/dashboard.php"' . 'class="btn btn-simple">' . 'Painel' . '</a>';
              //} else {
                echo '<a href="auth/login.php"' . 'class="btn btn-simple">' . 'Login' . '</a>';
              //}
            ?>
              
            </li>
            <li>
                <a href="www.twitter.com" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="www.facebook.com" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav>      
    <!--   
    <div class="alert alert-danger landing-alert">
         <div class="container text-center">
             <h5>Aproveite! Ganhe Bônus de 10% em todos os anúncios!</h5>-->
        </div>
    </div>
</body>
  </html>