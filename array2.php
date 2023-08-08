<?php

$estados = [
    'AM'=>'Amazonas',
    'PA'=>'Pará',
    'RR'=>'Roraima',
    'RO'=>'Rondônia',
    'AP'=>'Amapá'
];

echo $estados['AM']."<br>";
echo $estados['AP']."<br>";
echo $estados['RR']."<br>";

foreach($estados as $sigla=>$estado){
    echo "Chave: $sigla<br>";
    echo "Valor: $estado<br>";
}

?>

<table>
    <tr>
        <td>Sigla</td>
        <td>Estado</td>
    </tr>
    <?php 
       foreach($estados as $sigla=>$estado){
    ?>
    <tr>  
        <td><?=$sigla?></td>
        <td><?=$estado?></td>
    </tr>
    <?php }?>
</table>