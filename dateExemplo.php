<?php
#date_default_timezone_set("America/Manaus");
#setlocale(LC_ALL, 'pt_BR','portuguese');
#echo strftime('%A, %d de %B de %Y', strtotime('today'))."<br>";

$hoje = date("d/m/Y");
$hora = date("h:i:sa");
$dia  = date("D");
$ndia = date("w");
echo $hoje."<br>";
echo $hora."<br>";
echo $dia."<br>";

switch($ndia){
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    default:
        echo "Eu não sei o que aconteceu aqui";
}

?>