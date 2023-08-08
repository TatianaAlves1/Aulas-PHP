<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<ol>
<?php 
    $ar = ['Mouse','Teclado','Monitor','Memória','Processador','HD'];
    $i=0; 
    while($i<6){
?>
    <li><?=$ar[$i]?></li>
<?php 
    $i++;
    };
?>
</ol>
    
</body>
</html>