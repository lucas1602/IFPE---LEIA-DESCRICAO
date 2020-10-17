<?php

	session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];
    $assunto = $_GET['assunto'];
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
    	<?php if($assunto == "area"){ ?>
	    	<div class="col s6" style="padding: 20px;">
		    	<a href="calculo.php?figura=quadrado" class="waves-effect waves-light btn-large blue lighten-1 botao3">Quadrado</a>
	            <a href="calculo.php?figura=retangulo" class="waves-effect waves-light btn-large blue lighten-1 botao3">Retângulo</a>
	            <a href="calculo.php?figura=circulo" class="waves-effect waves-light btn-large blue lighten-1 botao3">Círculo</a>
	            <a href="calculo.php?figura=trapezio" class="waves-effect waves-light btn-large blue lighten-1 botao3">Trapézio</a>
	            <a href="calculo.php?figura=losango" class="waves-effect waves-light btn-large blue lighten-1 botao3">Losango</a>
	            <a href="calculo.php?figura=t-qualquer" class="waves-effect waves-light btn-large blue lighten-1 botao3">Triângulo qualquer</a>
	            <a href="calculo.php?figura=t-retangulo" class="waves-effect waves-light btn-large blue lighten-1 botao3">Triângulo retângulo</a>
	            <a href="calculo.php?figura=t-equilatero" class="waves-effect waves-light btn-large blue lighten-1 botao3">Triângulo equilátero</a>
	            <br>
	    	</div>
	    <?php } elseif($assunto == "volume") {?>
	    	<div class="col s6" style="padding: 20px;">
		    	<a href="calculo.php?figura=cubo" class="waves-effect waves-light btn-large blue lighten-1 botao3">Cubo</a>
	            <a href="calculo.php?figura=prisma-retan" class="waves-effect waves-light btn-large blue lighten-1 botao3">Prisma retan</a>
	            <a href="calculo.php?figura=prisma-trian" class="waves-effect waves-light btn-large blue lighten-1 botao3">Prisma trian</a>
	            <a href="calculo.php?figura=cilindro" class="waves-effect waves-light btn-large blue lighten-1 botao3">Cilindro</a>
	            <a href="calculo.php?figura=cone" class="waves-effect waves-light btn-large blue lighten-1 botao3">Cone</a>
	            <a href="calculo.php?figura=piramide" class="waves-effect waves-light btn-large blue lighten-1 botao3">Pirâmide</a>
	            <a href="calculo.php?figura=esfera" class="waves-effect waves-light btn-large blue lighten-1 botao3">Esfera</a>
                <br>	  
	    	</div>
	    <?php } elseif($assunto == "potencia") {
                header('location: calculo.php?figura=potencia');
              } else if($assunto == "raiz"){
                header('location: calculo.php?figura=raiz');
              } else if($assunto == "fracao") { ?>
                <div class="col s6" style="padding: 20px;">
                    <a href="calculo.php?figura=soma-frac" class="waves-effect waves-light btn-large blue lighten-1 botao3">Soma de fração</a>
                    <a href="calculo.php?figura=subtracao-frac" class="waves-effect waves-light btn-large blue lighten-1 botao3">Subtração</a>
                    <a href="calculo.php?figura=multiplicacao-frac" class="waves-effect waves-light btn-large blue lighten-1 botao3">Multiplicação</a>
                    <a href="calculo.php?figura=divisao-frac" class="waves-effect waves-light btn-large blue lighten-1 botao3">Divisão</a>
                    <br>      
                </div>      
        <?php } ?>
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
			$('select').formSelect();	
        });
    </script>
</body>
</html>