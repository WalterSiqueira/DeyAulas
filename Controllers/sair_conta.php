<?php 

    session_start();

    include_once('../Models/conn.php');

    session_destroy();
    header('Location: ../Views/Login/index.php');
?>