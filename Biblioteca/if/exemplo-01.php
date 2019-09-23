<?php

$qualASuaIDade = 25;

$idadeCianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualASuaIDade < $idadeCianca) {	
	echo "Criança";
} elseif ($qualASuaIDade < $idadeMaior) {
	echo "Adolecente";
} elseif ($qualASuaIDade < $idadeMelhor) {
	echo "Adulto";
}else {
     echo "Não e Criança"; 
}

echo "<br>";

echo ($qualASuaIDade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>