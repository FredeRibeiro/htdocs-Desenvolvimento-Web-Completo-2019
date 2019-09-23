<?php 

function ola($texto = "Mundo", $periodo){

	return "Olá $texto! $periodo <br>";
}

echo ola("Mundo","");
echo ola("", "Boa Noite");
echo ola("Frede","Boa Tarde");
echo ola("Paulo","");

 ?>