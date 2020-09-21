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

</head>

<body>
	<h1>Olá, <?php echo $nome; ?></h1>
	<a href="sair.php">Sair</a>
</body>


</html>