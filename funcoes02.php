<?php
function calcular_percentual($valor,$perc):float{
    $total = ($valor * ($perc/100));
    return $total;
}
function somar($n1, $n2){
    $soma = $n1 + $n2;
    return $soma;
}
for($i=0;$i<=2;$i++){
    echo "$i-";
}
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

echo $total;
echo $i;
echo $n1;
echo $soma;




?>