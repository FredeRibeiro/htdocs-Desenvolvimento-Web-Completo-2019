<?php

$anoNascimento = 1989;
$nomeCompleto = "Frederico Lima Ribeiro";
$nome = "Frederico";
$sobrenome = "Lima Ribeiro";


//concatenção.
echo $nome . " " . $sobrenome;

echo "<br/>";

//limpar eliminar a variavel da memoria.
unset($nomeCompleto);

//verificando se a variavel foi definda.
if (isset($nomeCompleto)){

	echo "$nomeCompleto";
}




?>