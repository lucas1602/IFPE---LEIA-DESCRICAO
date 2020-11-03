<?php

    session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];

    if($nome != "adminextensao2020"){
      session_destroy();
      session_unset();
      header('location: ../index.php');
    }

    require_once '../banco/db/crud.php';
    $p = new Assunto;

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
        <form method="POST">
            <input placeholder="Título" name="titulo" type="text" class="center validate white-text blue darken-4">
            <textarea placeholder="Descrição" name="descricao" type="text" class="center validate white-text blue darken-4"></textarea>
            <textarea placeholder="Link da imagem" name="imagem" type="text" class="center validate white-text blue darken-4"></textarea><br><br>
            <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao">Postar</button>
        </form>
      </div>
      <div class="col s1"></div>
    </div>

    <?php
    //Postar
    if(isset($_POST['botao']))
    {
        $titulo = addslashes($_POST['titulo']);
        $descricao = addslashes($_POST['descricao']);
        $imagem = $_POST['imagem'];

        if(!empty($titulo) && !empty($descricao) && !empty($imagem))
        {
            $p->conectar("extensao","localhost","tvpolemicaipojuca","wanderssonipojuca");
            if ($p->msgErro=="")
            {
              if ($p->novoassunto($titulo, $descricao, $imagem))
              {
                  echo "Postado com sucesso!";
              }
              else
              {
                  echo "Erro ao postar, assunto já existe.";
              }
            }else{
                    echo "Erro: ".$u->msgErro;
            }
        }else{
          echo "Preencha os campos";
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