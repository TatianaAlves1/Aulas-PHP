<?php
$nome      = "Tatiana"; 
$sobrenome = "Alves";
$matricula = 2116; 
$nome .= $sobrenome;
echo gettype($nome);
echo "<br>";
echo var_dump($nome);
echo "<br>";
echo gettype($matricula);
echo "<br>";
echo var_dump($matricula);

echo "<h3>A prof.ª se chama $nome e sua Matrícula é $matricula</h3>";
echo '<h3>Nome: '.$nome." e Matrícula: ".$matricula;
echo "<h3>$nome</h3>"

?>