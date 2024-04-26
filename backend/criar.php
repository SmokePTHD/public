<?php 
include("conexion.php");

$hashed_password = password_hash('1234', PASSWORD_DEFAULT);
echo $hashed_password;
$stmt = $conn->prepare("INSERT INTO usuarios (nome, apelido, sexo, email, usuario, password, cargo, status, isDeleted) VALUES ('Gonçalo', 'Sousa', 'M', 'glapdesousa@gmail.com', 'Smoke', ?, 'Dev', 'offline', '0')");
$stmt->execute([$hashed_password]);

?>