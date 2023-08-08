
<?php
//Arrays indexados
//     [  0          1         2           3            4               5      6 ]
$var = ['Manaus','Coari','Manacapuru','Parintins','Rio Preto da Eva','Labrea','x'];
var_dump($var);
echo "<h3>Quantidade: ".count($var)."</h3>";
echo $var[0]."<br>";
echo $var[4]."<br>";
echo $var[5]."<br>";
$qtd=count($var);
$i = 0;
while($i<$qtd){
    echo "<h4>$var[$i]</h4>";
    $i++;
}
echo "<h2>===============foreach================</h2>";
foreach($var as $x){
    echo "<h3>$x</h3>";
}

?>