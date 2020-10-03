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
	    		  <div class="input-field col s12 white-text">
				    <select>
				      <option value="" selected>Escolha uma figura</option>
				      <option value="1">Quadrado</option>
				      <option value="2">Retângulo</option>
				      <option value="3">Círculo</option>
				      <option value="3">Trapézio</option>
				      <option value="3">Losango</option>
				      <option value="3">Triângulo Quaisquer</option>
				      <option value="3">Triângulo Retângulo</option>
				      <option value="3">Triângulo Equilátero</option>
				    </select>
				    <label>Área</label>
				  </div>
	    	</div>
	    <?php } elseif($assunto == "volume") {?>
	    	<div class="col s6" style="padding: 20px;">
	    		  <div class="input-field col s12 white-text">
				    <select>
				      <option value="" selected>Escolha</option>
				      <option value="1">Cubo</option>
				      <option value="2">Prisma de base triangular</option>
				      <option value="3">Prisma de base retangular</option>
				      <option value="3">Cilindro</option>
				      <option value="3">Cone</option>
				      <option value="3">Pirâmide</option>
				      <option value="3">Esfera</option>
				    </select>
				    <label>Volume</label>
				  </div>
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