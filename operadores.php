<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">Número:</label>
        <input type="text" name="n1">
        <input type="submit">
    </form>


<?php
    if(isset($_GET['n1'])){
        $valor1 = $_GET['n1'];
    }else{
        $valor1 = "Informe um valor.";
    }
?>

<h2><?=$valor1?></h2>

</body>
</html>