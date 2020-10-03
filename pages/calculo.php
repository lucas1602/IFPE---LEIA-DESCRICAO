<?php

	session_start();
    if(!isset($_SESSION['nome'])){
        header('location: ../index.php');
        exit;
    }

    $nome = $_SESSION['nome'];
    $figura = $_GET['figura'];
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
    	<?php if($figura == "quadrado"){ ?>
	    	<div class="col s6" style="padding: 20px;">
		    	<img src="../img/calcular/quadrado.png" alt="" class="responsive-img" width="250px"><br>
                <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite o Lado" name="lado" id="lado" type="text" class="center validate white-text blue darken-4">
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                  </form>
                </div>
                <?php if(isset($_POST['lado'])){
                    $valor = $_POST['lado'];
                    if(!empty($valor)):
                        $resultado = $valor*$valor; ?>
                        <h5><?php echo $valor."² ou ".$valor."*".$valor."=".$resultado ?></h5>
                        <h3>Resultado: <?php echo $resultado ?></h3>
                    <?php else: ?>
                        <h5>PREENCHA OS CAMPOS ACIMA</h5>
                    <?php endif; ?>
                <?php } ?>
	    	</div>
	    <?php } elseif($figura == "retangulo") {?>
	    	<div class="col s6" style="padding: 20px;">
   		       <img src="../img/calcular/retangulo.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite a base" name="base" id="base" type="text" class="center validate white-text blue darken-4 col s5">
                      <div class="col s2"></div>
                      <input placeholder="Digite a altura" name="altura" id="altura" type="text" class="center validate white-text blue darken-4 col s5">
                      <br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                  </form>
                </div>
                <?php if(isset($_POST['base'])){
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    if(!empty($base) && !empty($altura)):
                        $resultado = $base*$altura; ?>
                        <h5><?php echo $base."*".$altura."=".$resultado ?></h5>
                        <h3>Resultado: <?php echo $resultado ?></h3>
                    <?php else: ?>
                        <h5>PREENCHA OS CAMPOS ACIMA</h5>
                    <?php endif; ?>
                <?php } ?>
	    	</div>
	    <?php } else if($figura == "circulo") { ?>
            <div class="col s6" style="padding: 20px;">
                <img src="../img/calcular/circulo.png" alt="" class="responsive-img" width="250px"><br>
            </div>
        <?php } ?>
        <?php ?>
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