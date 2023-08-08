<?php

//Utilização de variáveis no PHP
/*
Autor(a): Tatiana Alves
Data: 31/08/2022
Unidade Curricular: Executar processos de codificação, manutenção e documentação de sistemas para internet
*/
//mostrar mensagens na página
echo "Olá, Mundo!!!<br>";
//variáveis com tipagem dinamica
$curso = "Técnico em Informática";
$uc    = 'Sistemas para Internet';
$ch    = 96;
$valor = 1500.99;
$matricula = true;

//Exemplo de concatenação
echo 'Nome do curso: '.$curso."<br>";
echo "<h4>Unidade Curricular atual: $uc</h4>";

//tipos de variáveis
echo "Variável curso:<br>";
echo var_dump($curso)."<br>";
echo gettype($curso)."<br>";
echo "====================<br>";
echo "Variável uc:<br>";
echo var_dump($uc)."<br>";
echo gettype($uc)."<br>";
echo "====================<br>";
echo "Variável ch:<br>";
echo var_dump($ch)."<br>";
echo gettype($ch)."<br>";
echo "====================<br>";
echo "Variável valor:<br>";
echo var_dump($valor)."<br>";
echo gettype($valor)."<br>";
echo "====================<br>";
echo "Variável matricula:<br>";
echo var_dump($matricula)."<br>";
echo gettype($matricula)."<br>";
echo "=========FIM========<br>";
?>