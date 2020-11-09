<?php

    session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];
    if(!empty($_GET['figura'])){
      $figura = $_GET['figura'];
    }else{
      $figura = "";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
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
    	<div class="col s3"></div>
    	<div class="col s6" style="padding: 20px;">
            <img src="../img/triangs.png" alt="" class="responsive-img" width="250px"><br>
            <a href="calculo.php?figura=t-retangulo" class="waves-effect waves-light btn-large blue lighten-1 botao4">Triângulo retângulo</a>
            <a href="calculo.php?figura=t-equilatero" class="waves-effect waves-light btn-large blue lighten-1 botao4">Triângulo equilátero</a>
            <a href="calculo.php?figura=t-qualquer" class="waves-effect waves-light btn-large blue lighten-1 botao4">Triângulo Qualquer</a>
    	</div>
    	<div class="col s3"></div>
    </div>

	<!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Inicializações-->
    <script>
        $(document).ready(function () {
        });
    </script>

</body>
</body>