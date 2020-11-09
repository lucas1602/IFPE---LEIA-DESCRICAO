<?php

    session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];
    require_once '../banco/db/crud.php';
    $p = new Assunto;

    $p->conectar("extensao","localhost","root","");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Questões</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--materialize css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Customização-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<body>
    <div class="blue darken-5 white-text center row" style="height: 800px;">
      <div class="col s1"></div>
      <div class="col s10">
      <?php
        for($i = 1; $i <= 200; $i+=1){
          $dados = $p->lerassunto($i);
          if(!empty($dados)){
            ?>
              <div class="card col s3">
                <div class="card-image waves-effect waves-block waves-light">
                  <img height="200" class="activator" src=<?php echo $dados['imagem']; ?>>
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><?php echo $dados['titulo']; ?><i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Link aqui</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><?php echo $dados['titulo']; ?><i class="material-icons right">close</i></span>
                  <p class="grey-text text-darken-4"><?php echo $dados['descricao']; ?></p>
                </div>
              </div>
          <?php
          }else{
            break;
          }
        }
      ?>
      </div>
      <div class="col s1"></div>
    </div>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Inicializações-->
    <script>
        $(document).ready(function () {
            $('select').formSelect();   
        });
    </script>
</body>
</html>