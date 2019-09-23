<?php 

$pessoa = array(

	'nome' => 'João',
	'idade' => 20

);

foreach ($pessoa as &$value) {

	if (gettype($value)=== 'integer') $value +=10; {
		# code...
	}
	
	echo $value . '<br>';
}

print_r($pessoa);

 ?>