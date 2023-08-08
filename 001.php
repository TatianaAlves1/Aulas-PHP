<?php
/*
  Script desenvolvido por Tatiana Alves
  Aula 01 -PHP
  SENAC/AM
*/
  //comando para exibir textos na página
  echo "Olá, Mundo!!!!<br>";
  #php suporta HTML
  echo "Turma 111/306<br>";

  $curso = "Técnico em informática";
  $uc    = 'Internet'; 
  $ch    = 96;
  $valor = 1500.99;
  $matricula = FALSE;

//exemplos de concatenação
echo 'Nome do curso: '.$curso.'<br>';
echo 'Carga horária: '.$ch.'<br>';
echo "Nome da Unidade Curricular: $uc";
echo "<h3>Investimento: R$ $valor</h3>";
echo "Status da matricula: $matricula";

// verificação de tipos de dados
echo "<h4>Variável Curso:</h4>";
echo gettype($curso)."<br>";
echo var_dump($curso)."<br>";


?>