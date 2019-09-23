<?php 

 $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

 $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN,:PASSOWORD)");

$login = "José";
$passaword = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSOWORD", $passaword);

$stmt->execute();

echo "Dados Inseridos";


 ?>