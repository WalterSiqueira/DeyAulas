<?php 

    session_start();

    include_once('../Models/conn.php');

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../Views/Login/index.php');
?>