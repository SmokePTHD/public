<?php 
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ./pages/authentication/card/login.html");
    exit();
  }

?>