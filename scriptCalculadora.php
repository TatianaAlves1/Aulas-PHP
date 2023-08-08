<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];
/*
if($op=="+"){
    $resultado = $n1+$n2;
    echo "<h2>O resultado da soma é: $resultado</h2>";
}elseif($op=="-"){
    $resultado = $n1-$n2;
    echo "<h2>O resultado da subtração é: $resultado</h2>";
}elseif($op=="*"){
    $resultado = $n1*$n2;
    echo "<h2>O resultado da multiplicação é: $resultado</h2>";
}else{
    if($n2==0){
        echo "Impossível realizar a operação!!!";
    }else{
        $resultado = $n1/$n2;
        echo "<h2>O resultado da divisão é: $resultado</h2>";
        $a = number_format($resultado,2,',','.');
        echo $a;
    }
}*/
switch($op){
    case '+':
        $resultado = $n1 + $n2;
        break;
    case '-':
        $resultado = $n1 - $n2;
        break;
    case '*':
        $resultado = $n1 * $n2;
        break;
    case '/':
        if($n2==0){
            $resultado = "Não é possível calcular";
        }else{
            $resultado = $n1 / $n2;
        }
        break;
    default:
        $resultado = "Não foi possível Calcular";
}

echo "<h2>O resultado: $resultado</h2>";

?>