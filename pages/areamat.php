<?php

	session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];

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
    <div class="blue darken-5 white-text center" style="height: 800px;">
        <br>
        <p id="mostrarnome">Matemática<p><br>
        <img src="../img/matematica.png" alt="" class="responsive-img" width="250px"><br><br>
        <a class="waves-effect waves-light btn-large  indigo lighten-2 botao3"><i class="material-icons right">attachment</i>Assuntos</a><br><br>
        <a href="listadequestoes.php" class="waves-effect waves-light btn-large indigo lighten-2 botao3"><i class="material-icons right">create</i>Questões</a><br><br>
        <a href="calcular.php" class="waves-effect waves-light btn-large indigo lighten-2 botao3"><i class="material-icons right">calculate</i>Calcular Áreas</a>
        <br><br><br><br>
        <a class="white-text btn indigo lighten-2" href="escolha.php">Voltar</a>
    </div>
</body>

</html>