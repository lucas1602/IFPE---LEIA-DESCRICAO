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
    <link rel="stylesheet" href="css/custom.css">
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body>

    <div class="corpo blue darken-5 center white-text">
        <div>
            <img src="img/boy.webp" alt="">
        </div>
        <div>
            <h3>Bem-vindo!</h3>
            <p>Nos informe seu nome :).</p>
            <!-- FORM -->
            <form method="POST">
                <div class="input-field">
                    <input style="width: 70%" placeholder="Nome" name="nome" id="nome" type="text" class="validate white-text center">
                </div>
                <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Iniciar
                    <i class="material-icons right">send</i>
                </button>
            </form>  
        </div>
        <p>Saiba mais clicando no botão ao lado</p>
        <!-- BOTÃO FIXADO NO CANTO INFERIOR DIREITO -->
        <div class="fixed-action-btn">
            <a href="#!" class="btn-floating btn-large blue lighten-2 waves-effect waves-light">
                <i class="large material-icons">help</i>
            </a>
        </div>
    </div>


    <?php

        if(isset($_POST['nome'])){

            $nome = $_POST['nome'];
            if(empty($nome)):
                echo "Erro, preencha o campo.";
            else:
                session_start();
                $_SESSION['nome'] = $nome;
                header('location: pages/escolha.php');
            endif;
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
        });
    </script>
</body>

</html>