<?php
  date_default_timezone_set('America/Bahia');
  $url = "http://localhost/Pessoal/challenge-accepted/API/routes/index.php/weathers";
  echo $url;
  $ch = curl_init($url);
  $json = json_decode(curl_exec($ch));
  var_dump($json);  

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Clima Tempo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./styles/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body class="bg-background">

      <div class="container">
          <form class="form-weather">
            <h1 class="mb-4">Clima Tempo</h1>
            <div class="input-group col-md-6">
              <input type="text" class="form-control" placeholder="Pesquise por Cidade ou Estado">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
              </div>
            </div>
            <p class="mt-3 mb-3 text-muted">© 2020</p>
          <form>
      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
