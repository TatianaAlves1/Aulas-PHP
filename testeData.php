<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testeData.php" method="GET">
        <input type="datetime-local" name="dt">
        <input type="submit">
    </form>
</body>

<?php

    if(isset($_GET['dt'])){
        $data = $_GET['dt'];
        echo $data;
    }
    echo "<h3>Hoje é $data</h3>";
    echo var_dump($data)."<br>";
    $data2 = date("d/m/Y H:i:s",strtotime($data));
    echo "<h3>corrigido.... $data2</h3>";
?>
</html>