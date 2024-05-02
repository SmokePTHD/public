<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];

    include("conexion.php");

    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ? OR email = ?");
    $stmt->bind_param("ss", $usuario, $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['usuario'] = $usuario;

            $stmt_update = $conn->prepare("UPDATE usuarios SET status = 'online'");
            $stmt_update->execute();
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../pages/authentication/card/login.html");
        }
    } else {
        header("Location: ../pages/authentication/card/login.html");
    }

    $stmt->close();
    $conn->close(); 
}
?>