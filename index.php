<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location: pages/pagina-membro.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bilingual - Aprender inglês nunca foi tão fácil</title>
  <link rel="shortcut icon" href="img/fav.png">
  <!--Metas-->
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="format-detection" content="telephone=no">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--materialize css-->
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Customização-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body>
  <!-- C A B E Ç A L H O -->
  <div class="navbar-fixed">
    <nav class="red darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Bilingual</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="pages/login-cadastro.php" class="waves-effect waves-light btn red darken-4"><i
                  class="material-icons left">account_circle</i>Login</a></li>
            <li><a href="pages/login-cadastro.php" class="waves-effect waves-light btn red darken-4"><i
                  class="material-icons left">school</i>Primeiros passos</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- C O N T E Ú D O -->

  <!--SLIDER-->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white light red-text text-lighten-1">Hi, Lorena né?</h3>
          <h5 class="white light red-text text-lighten-1">Cursos, interação entre os membros e criação de conteúdo
          </h5>
          <a href="pages/login-cadastro.php" class="light btn-large waves-effect waves-light red lighten-2 botao">
            <i class="material-icons right">navigate_next</i>
            INICIAR AGORA MESMO
          </a>
        </div>
      </li>
      <li>
        <img src="img/slider5.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white light red-text text-lighten-1">Aprender inglês nunca foi tão fácil</h3>
          <h5 class="white light red-text text-lighten-1">Inglês para todas as idades
          </h5>
          <a href="pages/login-cadastro.php" class="light btn-large waves-effect waves-light red lighten-2 botao">
            <i class="material-icons right">navigate_next</i>
            INICIAR AGORA MESMO
          </a>
        </div>
      </li>
    </ul>
  </div>
  <!-- DESCRICAO -->
  <hr>
  <div class="descricao row container">
    <section class="col s12 m12 l9">
      <div class="section white">
        <div class="row container">
          <h2 class="header red-text text-darken-4 light">Você sabia?</h2>
          <h3 class="light grey-text lighten-3">Inglês é uma das linguas mais faladas e simples do mundo</h3>
          <p class="light">A lingua inglesa te tornará mais atraente para pessoas e empresas, além disso o idioma também
            pode tornar o aprendizado de outros idiomas ainda melhor, sem tirar o fato de que isso abrirá um mundo novo
            para você.</p>
          <p class="light">Entre na nossa comunidade e aprenda inglês da melhor forma possível!</p>
        </div>
      </div>
    </section>
    <!--ASIDE-->
    <aside class="descricao col s12 m12 l3">
      <div class="row container">
        <a href="pages/login-cadastro.php" class="btn-large waves-effect waves-light red lighten-1 botao2">
          Inglês do ZERO!
        </a>
      </div>
    </aside>
  </div>
  <hr>
  <!-- R O D A P É -->
  <footer class="page-footer red darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Saiba mais</h5>
          <p class="grey-text text-lighten-4">Além de você ter acesso aos blogs de dicas desenvolvidos por membros premium, o
            nosso curso oferece um conteúdo completo e organizado por níveis e tarefas. Além do chat onde você pode
            praticar com alguém do mesmo nível que o seu! <a href="#!">comece já</a> e saiba a verdadeira forma de
            aprender inglês do ZERO.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Nos siga no instagram ou entre em contato por e-mail</h5>
          <a href="#!"><img style="width: 80px;"src="img/instagram.png"></a>
          <a href="#!"><i class="large white-text material-icons">email</i></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2020 Bilingual
      </div>
    </div>
  </footer>

  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!--Inicializações-->
  <script>
    $(document).ready(function () {
      //slider
      $('.slider').slider({
        indicators: false,
        height: 550,
        duration: 800,
        interval: 3500
      });
      //cards
      $('.tabs').tabs({
        duration: 500,
        swipable: true,
      });
      //select
      $('select').formSelect();
    });
  </script>
</body>

</html>