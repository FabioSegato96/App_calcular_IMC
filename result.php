<?php

require "regras.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>Calculadora IMC</title>    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-info">
        <a href="index.php" class="navbar-brand">Calculadora da Saúde</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navtarget">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container">

      <?php if ($m <= 16) {?>
    <div class="row justify-content-center">    
      <div class="card bg-danger text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Cuidado!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo1 . '</strong>!<hr>' . $msgtipo1 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 16 && $m <= 16.99) {?>
    <div class="row justify-content-center">    
      <div class="card bg-warning text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Cuidado!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo2 . '</strong>!<hr>' . $msgtipo2 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 17 && $m <= 18.49){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-warning text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Fique atento!</p>   

        </div>      
        <div class="card-body mt3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo3 . '</strong>!<hr>' . $msgtipo3 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 18.50 && $m <= 24.99){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-success text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Ótimo!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong> ' . $tipo4 . ' </strong>!<hr>' . $msgtipo4 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 25 && $m <= 29.99){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-warning text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Fique atento!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo5 . '</strong>!<hr>' . $msgtipo5 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 30 && $m <= 34.99){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-warning text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Cuidado!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong> ' . $tipo6 . '</strong>!<hr>' . $msgtipo6 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 35 && $m <= 39.99){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-danger text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Cuidado!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo7 . '</strong>!<hr>' . $msgtipo7 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>

      <?php if ($m >= 40){ ?>
    <div class="row justify-content-center">    
      <div class="card bg-danger text-dark mb-2 mt-5 col-md-5">
        <div class="card-header text-center mt-3">
          
           <p class="display-4">Cuidado!</p>   

        </div>      
        <div class="card-body mt-3" style="height: 300px;">

          <?php echo ('<strong> ' . $nome . '</strong>, você possui índice de massa corporal igual a <strong> ' . $m . ' </strong> <br> Seu IMC é classificado como <strong>' . $tipo8 . '</strong>!<hr>' . $msgtipo8 ); ?>
        </div>      
      </div>
    </div>        
      <?php } ?>
    </div>

     <footer class="fixed-bottom nav navbar-fixed-bottom pb-3 justify-content-center display-5 bg-info mt-3 text-center pt-3 font-weight-bold">
          
          <span class="text-dark">&lt;</span><span class="text-danger">Ad</span><span class="text-white"><span class="text-dark">_</span><span class="text-white">Tech</span><span class="text-dark">&gt;</span> <span class="text-dark"> &#169; 2021 - by Fabio Segato <span> 

      </footer>
       

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>