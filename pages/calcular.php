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

    <div class="blue darken-5 white-text center row" style="height: 800px;">
    	<div class="col s3"></div>
    	<div class="col s6" style="padding: 20px;">
            <img src="../img/calculadora.webp" alt="" class="responsive-img" width="250px"><br>
    		<a href="calculadora.php?assunto=area" class="waves-effect waves-light btn-large blue lighten-1 botao3">Área</a>
            <a href="calculadora.php?assunto=volume" class="waves-effect waves-light btn-large blue lighten-1 botao3">Volume</a>
            <a href="calculadora.php?assunto=potencia" class="waves-effect waves-light btn-large blue lighten-1 botao3">Potência</a>
            <a href="calculadora.php?assunto=raiz" class="waves-effect waves-light btn-large blue lighten-1 botao3">Raiz</a>
            <a href="calculadora.php?assunto=fracao" class="waves-effect waves-light btn-large blue lighten-1 botao3">Fração</a>
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
</html>