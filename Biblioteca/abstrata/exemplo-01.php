<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

Abstract class Automovel implements Veiculo{
	
	public function acelerar($velocidade){

		echo "O veiculo aceelerou até ". $velocidade ."KM/h"; 

	}
	public function freiar($velocidade){

		echo "O veiculo Frenou até ". $velocidade ."KM/h";

	}
	public function trocarMarcha($marcha){

		echo "O veiculo engatou a marcha ". $marcha;
	}
	
}

class DelRey extends Automovel
{
	
	public function empurrar(){


	}
}

$carro = new DelRey();

$carro->acelerar(200);

 ?>