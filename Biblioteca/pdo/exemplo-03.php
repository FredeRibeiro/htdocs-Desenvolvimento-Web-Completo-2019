<?php 

 $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

 $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSOWORD WHERE idusuario = :ID");

$login = "Jose";
$passaword = "1234567890";
$id = 5;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSOWORD", $passaword);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Alterados";


 ?>