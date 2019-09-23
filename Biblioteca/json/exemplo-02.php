<?php 

$json = '[{"nome":"Frederico","idade":28},{"nome":"Paulo","idade":52}]';

$data = json_decode($json, true);

var_dump($data);

 ?>