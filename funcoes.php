<?php
//funções matemáticas

function mensagem():void{
    echo "<h3>Olá, mundo!!!!</h3>";
}
function mostrar_saudacao():void{
    #date_default_timezone_set("asia/tokyo");
    #echo date_default_timezone_get();
    $d = date('H');
    if($d<12){ echo "Bom dia";}
    elseif($d<18){ echo "Boa tarde";}
    else{echo "Boa Noite"; }
}
function mostrar_data():void{
    echo date('d/m/y');
}
function boas_vindas($user):void{
    echo "Seja bem-vindo(a), $user !!!";
}

?>