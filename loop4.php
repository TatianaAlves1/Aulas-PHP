<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Contador</td>
            <td>Soma</td>
        </tr>
        <?php $i = 0;  
        $arr  = ['Maça','uva','pera','banana','bolo','abacate'];
        while($i<count($arr)){?>
         <tr>
            <td><?=$i?></td>
            <td><?=$arr[$i]?></td>
         </tr>   
        <?php $i++; }?>
    </table>
</body>
</html>