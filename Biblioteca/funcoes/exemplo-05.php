<?php 

$a = 10;

//passagem de parametro por referencia &
function trocaValor(&$a){

	$a += 50;

	return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;

 ?>