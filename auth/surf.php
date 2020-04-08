<?php 
setcookie('id', '1');
require_once "conn_ad.php";

//include "progressbar.php"; Mudar para AJAX

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Assistindo anúncio</title>
</head>
<body>

        <header>
       
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand ">Aguarde. 
        Quando a barra encher completamente, responda o captcha</a>
        <div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
     
    


    </nav>

        <div class="text-center">
    <div class="progress">

<div class="progress-bar" style="width:0%">Assistindo anúncio. Aguarde para ser contabilizado.</div>

</div>
    </div>
    </header>

    <div class="container">
    <!--
    <div class="alert alert-success">
    <strong>Atenção!</strong> Este site utiliza cookies para aprimorar a experiência do usuário. Nós não guardamos nenhuma informação pessoal sua, portanto, pode navegar sem medo. Estamos em conformidade com a GDPR
  </div>--> 


    <!--Abaixo vai ficar os sites que abrirão de acordo com o sorteio feito na tabela do banco de dados-->
    
    <div class="row">
        <div class="col-sm">Anúncios aqui tambem</div>

        <div class="col-sm">
        <form>
            <label>Imagine uma questão qualquer de concurso público aqui e responda</label>
            <input type="text" class="form-control" placeholder="Ex: Quem foi o primeiro presidente da república ?">

            <button type="submit" class="btn btn-primary">Enviar Respostas</button>
        </form>
        
        </div>

        <div class="col-sm">Anuncios aqui</div>

    </div>
   

    </div> <!--End of container-->




</body>
</html>

<?php 



?>