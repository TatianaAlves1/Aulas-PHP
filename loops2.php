<?php
  $i = 0; 
  while($i<=20){
    if($i%2==0 && $i!=0){
        echo "número par";
    }
    echo "- $i<br>";
    $i++;
  }  
  $x = 0;
  $cont =0;
  do{
    if($x%2==0 and $x!=0){
        $cont +=1;
    }
    echo "$x - ";
    $x++;
  }while($x<=20);
echo "<h2> A quantidade de números ímpares nesse intervalo é: $cont</h2>";

?>