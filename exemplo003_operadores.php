<?php
$n1 = 10;
$n2 = 26.9;

$soma = $n1+$n2;
$sub  = $n1-$n2;
$mult = $n1*$n2;
$div  = $n1/$n2;
$exp  = $n2**3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>

    <style>
        h2{color:blue;}
        h1,h2{text-align:center;}
    </style>

</head>
<body>
        <h1>Resultados das operações aritméticas</h1>
        <h2>Soma: <?php echo $soma; ?></h2>
        <h2>Tipo de dado: <?php echo var_dump($soma);?></h2>
        <h2>Subtração: <?php echo $sub;?></h2> 
        <h2>Tipo de dado: <?php echo var_dump($sub);?></h2>   
        <h2>Subtração: <?php echo $n2;?> elevado a 3ª potencia</h2> 
        <h2>Resultado: <?php echo $exp;?></h2>
</body>
</html>
