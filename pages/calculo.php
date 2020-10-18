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
                <div class="input-field col s12">
                <form method="POST">
                <div class="col s3"></div>
                <input placeholder="Digite o raio" name="raio" id="raio" type="text" class="center validate white-text blue darken-4 col s6">
                <div class="col s3"></div>
                <br><br><br>
                <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
           </form>
            </div>
            <?php if(isset($_POST['raio'])){
                $raio = $_POST['raio'];
                if(!empty($raio)):
                    $resultado = 3.14*$raio*$raio;?>
                    <h5><?php echo $raio. "". $raio. "". "PI"."=". $resultado ?></h5>
                    <h3>Resultado: <?php echo $resultado ?></h3>
                <?php else: ?>
                    <h5>PREENCHA O CAMPO ACIMA</h5>
                <?php endif; ?>
            <?php } ?>
        <?php } else if($figura == "trapezio") { ?>
            <div class="col s11" style="padding: 20px">
            <div class="col s1"></div>
        <img src="../img/calcular/trapezio.png" alt="" class="responsive-img" width="250px"><br>
        <div class="input-field col s12">
                <form method="POST">
                <div class="col s1"></div>
                <input placeholder="Digite a Base Maior" name="basemaior" id="basemaior" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <input placeholder="Digite a Base Menor" name="basemenor" id="basemenor" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <input placeholder="Digite a Altura" name="altura" id="altura" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <br><br>
                <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                </form>
                </div>
                <?php if(isset($_POST['basemaior'])){
                    $basemaior = $_POST['basemaior'];
                    $basemenor = $_POST['basemenor'];
                    $altura = $_POST['altura'];
                    if(!empty($basemaior) && !empty($basemenor) && !empty($altura)):
                    $resultado = $basemaior*$basemenor*$altura/2; ?>
                    <h5><?php echo $basemaior."".$basemenor."".$altura."/"."2". "=". $resultado?></h5>
                    <h3> Resultado: <?php echo $resultado ?></h3>
                <?php else: ?>
                    <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
        <?php } ?>
                <?php } else if($figura == "losango"){ ?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/losango.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite a Diagonal Maior" name="diagmaior" id="diagmaior" type="text" class="center validate white-text blue darken-4 col s5">
                      <div class="col s2"></div>
                      <input placeholder="Digite a Diagonal Menor" name="diagmenor" id="diagmenor" type="text" class="center validate white-text blue darken-4 col s5">
                      <br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                <?php if(isset($_POST['diagmaior'])){
                    $diagmaior = $_POST['diagmaior'];
                    $diagmenor = $_POST['diagmenor'];
                    if(!empty($diagmaior) && !empty($diagmenor)):
                        $resultado = $diagmaior*$diagmenor/2; ?>
                        <h5><?php echo $diagmaior. "*". $diagmenor. "/"."2". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php }?>
                </div>
            <?php } else if($figura == "t-qualquer"){ ?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/trianguloqualquer.png" alt="" class="responsive-img" width="250px"><br>
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
                        $resultado = $base*$altura/2; ?>
                        <h5><?php echo $base. "*". $altura. "/"."2". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php } ?>
            <?php } else if($figura == "t-retangulo"){ ?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/trianguloretangulo.png" alt="" class="responsive-img" width="250px"><br>
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
                        $resultado = $base*$altura/2; ?>
                        <h5><?php echo $base. "*". $altura. "/"."2". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php } ?>
                <?php } else if($figura == "t-equilatero"){ ?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/trianguloequilatero.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                  <div class="col s3"></div>
                      <input placeholder="Digite o lado" name="lado" id="lado" type="text" class="center validate white-text blue darken-4 col s6">
                      <div class="col s3"></div>
                      <br><br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                <?php if(isset($_POST['lado'])){
                    $lado = $_POST['lado'];
                    if(!empty($lado)):
                        $resultado = 1.732*$lado*$lado/4; ?>
                        <h5><?php echo $lado. "*". "√3". "/"."4". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php } ?>
                <?php } else if($figura == "cubo") { ?>
                    <div class=" col s12" style="padding: 20px;">
                <img src="../img/calcular/cubo.png" alt="" class="responsive-img" width="250px"><br>
                <div class="input-field col s12">
                  <form method="POST">
                  <div class="col s3"></div>
                      <input placeholder="Digite a aresta" name="aresta" id="aresta" type="text" class="center validate white-text blue darken-4 col s6">
                      <div class="col s3"></div>
                      <br><br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                      <?php if(isset($_POST['aresta'])){
                    $aresta = $_POST['aresta'];
                    if(!empty($aresta)):
                        $resultado = $aresta*$aresta*$aresta; ?>
                        <h5><?php echo $aresta. "". $aresta. "". $aresta.  "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php } ?>
                <?php } else if($figura == "prisma-retan") {?>
                    <div class="col s12" style="padding: 20px">
                <img src="../img/calcular/prismaretangular.png" alt="" class="responsive-img" width="250px"><br>

                <div class="input-field col s12">
                <form method="POST">
                <div class="col s1"></div>
                <input placeholder="Digite o Comprimento" name="comprimento" id="comprimento" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <input placeholder="Digite a Largura" name="largura" id="largura" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <input placeholder="Digite a Altura" name="altura" id="altura" type="text" class="center validate white-text blue darken-4 col s3">
                <div class="col s1"></div>
                <br><br>
                <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                </form>
                </div>

                <?php if(isset($_POST['comprimento'])){
                    $comprimento = $_POST['comprimento'];
                    $largura = $_POST['largura'];
                    $altura = $_POST['altura'];
                    if(!empty($comprimento) && !empty($largura) && !empty($altura)):
                    $resultado = $comprimento*$largura*$altura; ?>
                    <h5><?php echo $comprimento."".$largura."".$altura. "=". $resultado?></h5>
                    <h3> Resultado: <?php echo $resultado ?></h3>
                <?php else: ?>
                    <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
        <?php } ?>
        <?php } else if($figura == "prisma-trian") {?>
            <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/prismatriangular.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite a Base" name="base" id="base" type="text" class="center validate white-text blue darken-4 col s5">
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
                        $resultado = $base*$altura/2; ?>
                        <h5><?php echo $base. "*". $altura. "/"."2". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php }?>
                <?php } else if($figura == "cilindro") { ?>
                <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/cilindro.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite o Raio" name="raio" id="raio" type="text" class="center validate white-text blue darken-4 col s5">
                      <div class="col s2"></div>
                      <input placeholder="Digite a altura" name="altura" id="altura" type="text" class="center validate white-text blue darken-4 col s5">
                      <br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                <?php if(isset($_POST['raio'])){
                    $raio = $_POST['raio'];
                    $altura = $_POST['altura'];
                    if(!empty($raio) && !empty($altura)):
                        $resultado = $raio*$raio*$altura*3.14; ?>
                        <h5><?php echo $raio. "". $raio. "". $altura. "*"."π". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php }?>
                <?php }else if ($figura == "cone") {?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/cone.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite o Raio" name="raio" id="raio" type="text" class="center validate white-text blue darken-4 col s5">
                      <div class="col s2"></div>
                      <input placeholder="Digite a altura" name="altura" id="altura" type="text" class="center validate white-text blue darken-4 col s5">
                      <br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                <?php if(isset($_POST['raio'])){
                    $raio = $_POST['raio'];
                    $altura = $_POST['altura'];
                    if(!empty($raio) && !empty($altura)):
                        $resultado = $raio*$raio*$altura*3.14/3; ?>
                        <h5><?php echo $raio. "". $raio. "". $altura. "*"."π". "/". "3". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php }?>
                <?php } else if($figura == "piramide"){?>
                    <div class="col s12" style="padding: 20px;">
               <img src="../img/calcular/prismatriangular.png" alt="" class="responsive-img" width="250px"><br>
               <div class="input-field col s12">
                  <form method="POST">
                      <input placeholder="Digite a Base" name="base" id="base" type="text" class="center validate white-text blue darken-4 col s5">
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
                        $resultado = $base*$altura/3; ?>
                        <h5><?php echo $base. "*". $altura. "/"."3". "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php }?>
                <?php } else if($figura == "esfera"){?>
                    <div class=" col s12" style="padding: 20px;">
                <img src="../img/calcular/esfera.png" alt="" class="responsive-img" width="250px"><br>
                <div class="input-field col s12">
                  <form method="POST">
                  <div class="col s3"></div>
                      <input placeholder="Digite o raio" name="raio" id="raio" type="text" class="center validate white-text blue darken-4 col s6">
                      <div class="col s3"></div>
                      <br><br><br>
                      <button type="submit" class="btn blue lighten-1 waves-effect waves-light" name="botao" id="botao">Calcular</button>
                      </form>
                      </div>
                      <?php if(isset($_POST['raio'])){
                    $raio = $_POST['raio'];
                    if(!empty($raio)):
                        $resultado = $raio*$raio*$raio*3.14*4/3; ?>
                        <h5><?php echo $raio. "". $raio. "". $raio. "". "π". "". "4/3".  "=". $resultado?></h5>
                        <h3>Resultado: <?php echo $resultado?></h3>
                <?php else: ?>
                <h5>PREENCHA OS CAMPOS ACIMA</h5>
                <?php endif; ?>
                <?php } ?>
                <?php }?>                
        <div class="col s3"></div>
    </?>

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