<?php 
    $vc = ['uc01','uc02','uc03','uc04','uc05','uc06','uc07'];
      
    /*foreach($vc as $i){
        echo $i;
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <ul>
        <?php 
            $i=0;
            while($i<count($vc)){
        ?>
        <li><?=$vc[$i]; ?> </li>
        <?php $i++;} ?>
    </ul>
</head>
<body>
    
</body>
</html>