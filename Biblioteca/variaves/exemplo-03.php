<?php

//String.
$nome = "Hcode";
$site = 'www.hcode.com.br';

//Inteiro.
$ano = 1990;

//Float.
$salario = 5500.99;

//Booleano.
$bloquado = false;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Arrays - tipo composto.
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

//Objeto - Criação de um objeto.
$nascimento = new DateTime();

//var_dump($nascimento);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Tipos Especiais.

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = NULL;

echo $nulo;

?>