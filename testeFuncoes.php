<?php require_once 'funcoes.php';
      require_once 'funcoes2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <header>
        <?php mensagem();?>
        <h3><?php mostrar_saudacao()?> Hoje é: <?php mostrar_data();?> </h3>
        <h4><?php boas_vindas('Tatiana');?></h4>
    </header>
    <main>
        <?php 
            $resultado = calcular_percentual(100,10);
            echo "<br>========Percentual de 100========<br>";
            echo calcular_percentual(100,10);
            echo "<br>=======Dobro=========<br>";
            //mostrar o dobro do percentual
            echo $resultado*2;
            echo "<br>========Metade========<br>";
            //mostrar a metade do percentual
            echo $resultado/2;
            echo "<br>========Desconto========<br>";
            //calcular um desconto
            echo 100-$resultado;
            echo "<br>========Taxa========<br>";
            echo 100+$resultado;
        ?>
    </main>
</body>
</html>