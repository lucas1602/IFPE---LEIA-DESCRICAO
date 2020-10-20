<?php
//MMC AQ

if(!empty($_GET['denominador1']) && !empty($_GET['denominador2']) && !empty($_GET['numerador1']) && !empty($_GET['numerador2'])){
	$denominador1 = $_GET['denominador1'];
	$denominador2 = $_GET['denominador2'];
	$numerador1 = $_GET['numerador1'];
	$numerador2 = $_GET['numerador2'];
	$denominadortemp = $denominador1;
	$denominadortemp2 = $denominador2;
}else{
	$denominador1 = 1;
	$denominador2 = 1;
	$numerador1 = 1;
	$numerador2 = 1;
}

if($denominadortemp == 0 || $denominadortemp2 == 0){
    $mmc = 0;
}
else if($denominadortemp == $denominadortemp2){
    $mmc = $denominadortemp;
}
else if($denominadortemp == 1){
    $mmc = $denominadortemp;
}
else if($denominadortemp2 == 1){
    $mmc = $denominadortemp2;
}else{
    $i = 2;
    $mmc = 1;
    $tudo1 = 0;
    while ($tudo1 != 1)
    {
        if ($denominadortemp == 1 && $denominadortemp2 == 1)
        {
            $tudo1 = 1;
        }
        else if ($denominadortemp % $i == 0 && $denominadortemp2 % $i == 0)
        {
            $mmc = $mmc * $i;
            $denominadortemp = $denominadortemp / $i;
            $denominadortemp2 = $denominadortemp2 / $i;
        }
        else if ($denominadortemp % $i == 0 && $denominadortemp2 % $i != 0)
        {
            $mmc = $mmc * $i;
            $denominadortemp = $denominadortemp / $i;
        }
        else if ($denominadortemp % $i != 0 && $denominadortemp2 % $i == 0)
        {
            $mmc = $mmc * $i;
            $denominadortemp2 = $denominadortemp2 / $i;
        }
        else
        {
            $i = $i + 1;
        }
    }
}

$resultado1 = ($mmc/$denominador1)*$numerador1;
$resultado2 = ($mmc/$denominador2)*$numerador2;
$resultado1 = $resultado1 + $resultado2;
$resultado2 = $mmc;
//FIM DO MMC

header('location: ../pages/calculo.php?figura=soma-frac&resultado1='.$resultado1.'&resultado2='.$resultado2);

?>