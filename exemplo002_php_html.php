<?php 
/*
Lista de timezones:
https://www.php.net/manual/pt_BR/timezones.america.php
lista de parâmetros do date:
https://www.php.net/manual/pt_BR/datetime.createfromformat.php
Parametros SERVER:
https://www.php.net/manual/pt_BR/reserved.variables.server.php
*/
date_default_timezone_set('America/Manaus');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração PHP e HTML</title>
</head>
<body>
    <p>Data Atual: <em><?php echo date('d/m/Y');?></em></p>
    <h2>Hora:<?php echo date('h:i:s')?> </h2>
    <h2>Versão do PHP:</h2>
    <?= phpversion() ?>
    <h2>Nome do Arquivo</h2>
    <?php echo $_SERVER['PHP_SELF'];?>
    <h2>Host</h2>
    <?php echo $_SERVER['SERVER_NAME'];?>
    <h2>Diretório Raiz</h2>
    <?php echo $_SERVER['DOCUMENT_ROOT'];?>
    <h2>Software</h2>
    <?php echo $_SERVER['SERVER_SOFTWARE'];?>
</body>
</html>