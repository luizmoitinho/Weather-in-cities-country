<?php
date_default_timezone_set('America/Bahia');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Clima Tempo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/styles/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  </head>
  <body class="bg-background">
      <div class="container-fluid header center-horizontal center-vertical bg-blue mb-md-5 mb-sm-3">
           <img class="logo-clima-tempo img-fluid" src="./assets/images/logo-white.png">
      </div>

      <div class="container center-horizontal">

          <div class="row">
            <div class= "form-weather p-0 col-md-12">
               <div id="msgError" class="text-danger col-lg-6 col-md-8 col-12 p-0 m-0 mb-2"></div>
               </div>
          </div>
          <div class="row">
            <div class="form-weather p-0 col-md-12">
              <div class="input-group col-lg-6 col-md-8 col-12 p-0 m-0 shadow-sm">
                <input type="text" class="form-control border-right" id="nameCitie" name="nameCitie" placeholder="Digite o nome da cidade">
                <div class="input-group-append bg-white btn-search">
                  <button class="btn" id="btnSearch" alt="Pesquisar"></button>
                </div>
              </div>  
            </div>
          </div>

          <div class="row justify-content-center mt-4">
            <h3 class="col-md-6 p-0" id="title-weather"></h3>
          </div> 
          <div id="info-weather">
          
          </div>
          
          <div class="row mt-4 d-flex justify-content-center">
            <p class="mt-3 mb-3 text-muted">© 2020</p>
          </div>
      </div>


    <script  src="assets/JS/jquery.js"></script>
    <script src="assets/JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>

