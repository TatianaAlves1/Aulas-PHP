<?php
$nome  = $_GET['nome'];
$email = $_GET['email'];
$nasc  = $_GET['nascimento'];
$cat   = $_GET['categoria'];

echo gettype($nasc)."<br>";
$nasc = date("d/m/Y",strtotime($nasc));

echo "<h2>O nome informado foi: $nome e o E-mail é: $email</h2>";
echo "<h2>A data de Nascimento é: $nasc</h2>";
echo "<h2>Este usuário pertence a categoria: $cat</h2>";

?>