<?php

    $vetor = ['garrafa','faca','colher','toalha'];
    echo $vetor[0]."<br>";
    echo $vetor[1]."<br>";
    echo $vetor[3]."<br>";
    $vetor[] = 'prato';
    $qtd = count($vetor);
    echo "<h3>Quantidade de Itens: $qtd</h3>";
    echo "<h3>Tipo de variável: </h3>".gettype($vetor);

    foreach($vetor as $v){
        echo "<br>".$v."<br>";
    }

?>