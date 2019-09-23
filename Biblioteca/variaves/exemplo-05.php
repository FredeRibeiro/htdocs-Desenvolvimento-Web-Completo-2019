<?php

$nome = "Frederico";


function teste(){

	global $nome;

	echo $nome;

}

function teste2(){

	$nome = "Paulo";

	echo "Agora no Teste 2 = ".$nome;

}

teste();
echo "<br>";
teste2();

?>