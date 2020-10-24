<?php

    session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];
    require_once '../banco/db/crud.php';
    $p = new Assunto;

    if(empty($_GET['id'])){
      $id = 1;
    }else if($_GET['id'] == 0){
      $id = 1;
    }else{
      $id = $_GET['id'];
    }

    $p->conectar("extensao","localhost","root","");
    $dados = $p->ler($id);

    if(empty($dados)){
      $id -= 1;
      $dados = $p->ler($id);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Adicionar assunto</title>
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
      <div class="input-field col s10">
        <h1><?php echo $dados['titulo'] ?></h1>
        <h3><?php echo $dados['descricao'] ?></h3>
        <br><br>
        <div class="cols 12">
          <div class="col s3">
            <label>
            <input class="with-gap" name="group1" type="radio"  />
            <span class="white-text"><?php echo $dados['correta'] ?></span>
            </label>
          </div>
          <div class="col s3">
            <label>
            <input class="with-gap" name="group2" type="radio"  />
            <span class="white-text"><?php echo $dados['errada1'] ?></span>
            </label>
          </div>
          <div class="col s3">
            <label>
            <input class="with-gap" name="group3" type="radio"  />
            <span class="white-text"><?php echo $dados['errada2'] ?></span>
            </label>
          </div>
          <div class="col s3">
            <label>
            <input class="with-gap" name="group4" type="radio"  />
            <span class="white-text"><?php echo $dados['errada3'] ?></span>
            </label>
          </div>
        </div>

        <br><br>
        <a href="listadequestoes.php?id=<?php echo $id-1 ?>" class="btn">Anterior</a>
        <a href="listadequestoes.php?id=<?php echo $id+1 ?>" class="btn">Próximo</a>

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