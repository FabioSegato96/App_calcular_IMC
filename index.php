<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>Novo Projeto</title>    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-info">
        <a href="index.php" class="navbar-brand"><span class="text-dark"><strong>Calculadora da Saúde</strong></span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navtarget">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container">
    <div class="row justify-content-center">    
      <div class="card bg-info text-dark mb-1 mt-2 col-md-5">
        <div class="card-header text-center">
          
           <p class="display-4">Calcule seu IMC</p>   

        </div>      
          <div class="card-body" style="height: 400px;">
          <form class="form-group" method="post" action="result.php">
            <label for="nome" class="card-subtitle mb-2 ml-5 mt-1"><strong>Nome</strong></label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" class="form-control d-block text-center ml-5" style="width:70%">          
            <label for="idade" class="card-subtitle mb-2 ml-5 mt-1"><strong>Idade</strong></label>
            <input type="number" id="idade" name="idade" placeholder="Digite sua idade" class="form-control d-block text-center ml-5" style="width:70%">
            <label for="altura" class="card-subtitle mb-2 ml-5 mt-1"><strong>Altura (em centimetros)</strong></label>
            <input type="number" id="altura" name="altura" placeholder="Digite sua altura (cm)" class="d-block text-center ml-5 form-control" style="width:70%">
            <label for="peso" class="card-subtitle mb-2 ml-5 mt-1"><strong>Peso</strong></label>
            <input type="number" id="peso" name="peso" placeholder="Digite seu peso " class="form-control d-block text-center ml-5" style="width:70%">
            <div class="text-center mt-3">
            <button class="btn btn-outline-white text-dark" name="calcular"><strong>Calcular</strong></button>
            <?php if( isset($_GET['erro']) && $_GET['erro'] == 2) { ?>
              <h5 class="text-danger">Insira valores válidos.</h5>
            <?php } ?>
            </div>          
          </form>  
          </div>      
        </div>
      </div>

    </div>

          <footer class="fixed-bottom pb-3 justify-content-center display-5 bg-info mt-3 text-center pt-3 font-weight-bold">
          
          <span class="text-dark">&lt;</span><span class="text-danger">Ad</span><span class="text-white"><span class="text-dark">_</span><span class="text-white">Tech</span><span class="text-dark">&gt;</span> <span class="text-dark"> &#169; 2021 - by Fabio Segato <span> 

      </footer>
       

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>