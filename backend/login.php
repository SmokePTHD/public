<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];

    include("conexion.php");

    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = '$usuario' OR email = '$usuario'");
    // $stmt->bind_param("s", $usuario, $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $stmt_update = $conn->prepare("UPDATE usuarios SET status = 'online'");
            $stmt_update->execute();
            header("Location: ../index.html");
            exit();
        } else {
            header("Location: ../pages/authentication/login.html");
        }
    } else {
        header("Location: ../pages/authentication/login.html");
    }

    $stmt->close();
    $conn->close(); 
}
?>