<?php

//Arrays Super Globais.


//http://localhost/variaves/exemplo-04.php?a=150
$nome = (int)$_GET["a"];


//http://localhost/variaves/exemplo-04.php?a=150&b=456
$nome1 = (int)$_GET["b"];

//var_dump($nome);
//var_dump($nome1);
 $ip = $_SERVER["REMOTE_ADDR"];

var_dump($ip);

?>