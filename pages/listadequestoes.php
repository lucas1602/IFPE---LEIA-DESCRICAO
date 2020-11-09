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

    <?php
      $randomico = rand(1, 20);
      $altcorreta = "value=\"correta\"";
      $alterrada = "value=\"errada\"";
    ?>

    <div class="blue darken-5 white-text center row" style="height: 800px;">
      <div class="col s1"></div>
      <div class="input-field col s10">
        <h3><?php echo $dados['titulo'] ?></h3>
        <p><?php echo $dados['descricao'] ?></p>
        <br><br>
        <form method="POST" class="cols 12">
          <div class="col s3">
            <label>
            <?php if($randomico <= 5){
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $altcorreta?>/>
              <span class="white-text"><?php echo $dados['correta'] ?></span>
            <?php
            }else{
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $alterrada?>/>
              <span class="white-text"><?php echo $dados['errada1'] ?></span>
            <?php
            }
            ?>
            </label>
          </div>
          <div class="col s3">
            <label>
            <?php if($randomico > 5 && $randomico <= 10){
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $altcorreta?>/>
              <span class="white-text"><?php echo $dados['correta'] ?></span>
            <?php
            }else{
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $alterrada?>/>
              <span class="white-text"><?php echo $dados['errada2'] ?></span>
            <?php
            }
            ?>
            </label>
          </div>
          <div class="col s3">
            <label>
            <?php if($randomico > 10 && $randomico <= 15){
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $altcorreta?>/>
              <span class="white-text"><?php echo $dados['correta'] ?></span>
            <?php
            }else{
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $alterrada?>/>
              <span class="white-text"><?php echo $dados['errada3'] ?></span>
            <?php
            }
            ?>
            </label>
          </div>
          <div class="col s3">
            <label>
            <?php if($randomico > 15 && $randomico <= 20){
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $altcorreta?>/>
              <span class="white-text"><?php echo $dados['correta'] ?></span>
            <?php
            }else{
            ?>
              <input class="with-gap" name="group1" type="radio" <?php echo $alterrada?>/>
              <?php
              if($randomico <= 5){
              ?>
                <span class="white-text"><?php echo $dados['errada1'] ?></span>
              <?php
              }else if($randomico <= 10){
              ?>
                <span class="white-text"><?php echo $dados['errada2'] ?></span>
              <?php
              }else if($randomico <= 15){
              ?>
                <span class="white-text"><?php echo $dados['errada3'] ?></span>
            <?php
              }
            }
            ?>
            </label>
          </div>
          <br><br> 
          <button type="submit" class="btn green lighten-2 waves-effect waves-light botao1" name="confirmar">Confirmar</button>
        </form>
        <br>
        <?php
        if(!empty($_GET["alternativa"])){
          if($_GET["alternativa"] == "correta"){
          ?>
            <div class="green">Alternativa correta</div>
          <?php
          }else if($_GET["alternativa"] == "nada"){
          ?>
            <div class="black">Selecione uma opção</div>
          <?php
          }else{
          ?>
            <div class="red">Alternativa incorreta, tente novamente.</div>
          <?php
          }
        }
        ?>
        <br><br>
        <a href="listadequestoes.php?id=<?php echo $id-1 ?>" class="btn blue darken-2">Anterior</a>
        <a href="listadequestoes.php?id=<?php echo $id+1 ?>" class="btn blue darken-2">Próximo</a>

      </div>
      <div class="col s1"></div>
      <a class="white-text btn blue lighten-1 botao1" href="areamat">Voltar para o menu</a>
    </div>

    <?php

    if(isset($_POST["confirmar"])){
      if(isset($_POST["group1"])){
        $tipo = $_POST["group1"];
        header("location: listadequestoes.php?alternativa=$tipo&id=$id");  
      }else{
        header("location: listadequestoes.php?alternativa=nada&id=$id");  
      }
    }

    ?>

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