<?php 

require_once "conn.php";

include "header.php";


?>

<!DOCTYPE html>
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


	<div class='wrapper'>
        <div class="landing-header" style="background-image: url('assets/paper_img/cat.jpg');">
            <div class="container">
                <div class="motto">
                    <h1 class="title-uppercase">Faça dinheiro aqui!</h1>
                    <h3>De usuários para usuários. 100% amigável!</h3>
                    <h4>Pagamos na segunda semana de cada mês</h4>
                    <br />
                    
                    <a class="btn" href="auth/register.php">Criar minha conta</a>
                </div>
            </div>    
        </div>
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class='col-md-8 col-md-offset-2'>
                            <h2>Primeira plataforma BRASILEIRA do ramo</h2>
                            <h5>Claramente inspirado no famoso BuzzBreak, nossa equipe pensou em trazer o melhor dos apps deste nicho a fim de atender a todas as necessidades daqueles que, como nós, são empreendedores natos e buscam a cada dia mais oportunidades e alternativas para renda extra. Sinta-se em casa e aproveite o máximo de nossa plataforma.</h5>
                            <br />
                            
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="section section-light-brown landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 column">
                            <h4>Fácil de usar</h4>
                            <p>Simples e bem explicativo para que todos possam usufruir o máximo da nossa plataforma sem dificuldades.</p>
                            
                        </div>
                        <div class="col-md-4 column">
                            <h4>Suporte completo</h4>
                            <p>Prezamos sempre pelo ótimo atendimento e suporte técnicos</p>
                            
                        </div>
                        <div class="col-md-4 column">
                            <h4>Pagamentos rápidos</h4>
                            <p>Tenha seu pagamento caindo na conta em menos de 7 dias úteis.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-dark text-center landing-section">
                <div class="container">
                    <h2>Nossa equipe</h2>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="assets/paper_img/chet_faker_2.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Patrick Souza <br /><small class="text-muted">CEO / CRIADOR</small></h5>
                            <p>Idealizador e coordenador geral do projeto. Dei forma a tudo que existe no site atualmente. Veja alguns dos meus outros <a href="#">projetos</a> e saiba mais sobre minha pessoa.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="assets/paper_img/flume.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Segundo da equipe <br /><small class="text-muted">CTO</small></h5>
                            <p>O CTO é aquele que resolve e organiza cada parâmetro do projeto</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="assets/paper_img/banks.jpg" alt="Thumbnail Image" class="img-circle img-circle img-responsive">
                            <h5>Banks <br /><small class="text-muted">Marketing</small></h5>
                            <p>Cuida de tudo relacionado á area de marketing e anúncios. Saiba mais sobre ele clicando <a href="#">aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center">Entre em contato!</h2>
                            <form class="contact-form" action="send_form.php">
                                <div class="row">
                                    <div class="col-md-6">
                                <?php 
                                    // Vai ser necessário criar um banco de dados só pra receber esse formulário
                                    // 
                                ?>
                                        <label>Seu nome</label>
                                        <input class="form-control" placeholder="Nome">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Seu e-mail</label>
                                        <input class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <label>Qual é sua mensagem ?</label>
                                <textarea class="form-control" rows="4" placeholder="Diga qualquer coisa que ache útil aqui..."></textarea>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button class="btn btn-danger btn-block btn-lg btn-fill" type="submit">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>     
    </div>

    <?php 
        include_once "footer.php";
    ?>

</body>

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="assets/js/ct-paper-checkbox.js"></script>
<script src="assets/js/ct-paper-radio.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>

<script src="assets/js/ct-paper.js"></script>

</body>
</html>