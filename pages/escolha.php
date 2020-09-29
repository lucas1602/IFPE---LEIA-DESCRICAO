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
        <p id="mostrarnome">Olá, <?php echo $nome?><p>
        <img src="../img/fisica.png" alt="" class="responsive-img" width="250px">
        <h3>Agora escolha a matéria!</h3>
        <a class="waves-effect waves-light btn-large blue lighten-1 botao1"><i class="material-icons right">calculate</i>Matemática</a>
        <a class="waves-effect waves-light btn-large blue lighten-1 botao2"><i class="material-icons right">science</i>Física</a>
        <br><br><br><br><br>
    	<a class="white-text btn blue" href="sair.php">Sair</a>
	</div>
</body>

</html>