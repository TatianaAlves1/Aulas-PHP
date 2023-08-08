<?php
$ar2 = array('Mouse','computador','mesa','teclado','câmera');
echo count($ar2);
echo "<h3>===========</h3>";
echo $ar2[0];
echo "<h3>===========</h3>";
foreach($ar2 as $i){
    echo "<h3>$i</h3>";
}
$ar2[]='cadeira';
foreach($ar2 as $i){
    echo "<h3>$i</h3>";
}
?>