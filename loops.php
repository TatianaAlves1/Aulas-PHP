<?php
echo "<h3>=============Loop While======================</h3>";
$i =0;
while($i<=100){
    echo $i."<br>";
    $i+=10;
}
echo "O valor final de X é: $i";
echo "<h3>=============Loop do-While======================</h3>";
$x=0;
do{
    echo $x."<br>";
    $x+=10;
}while($x<=100);
echo "O valor final de X é: $x";
echo "<h3>=============Loop For======================</h3>";
for($y=0;$y<=100;$y+=10){
    echo $y."<br>";
}
echo "O valor final de X é: $y";

?>