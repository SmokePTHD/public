<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];

    include("conexion.php");

    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: ../index.html");
            exit();
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }

    $stmt->close();
    $conn->close(); 
}
?>