<?php
$hostdb = 'localhost';
$usuariodb = 'root';
$passdb = '';
$db = 'clinica-rio-este';

$conn = mysqli_connect($hostdb, $usuariodb, $passdb, $db);

if (!$conn) {
    die('ERRO: '. mysqli_connect_error());
}

return $conn;

?>