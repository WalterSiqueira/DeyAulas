<?php 

    session_start();

    include_once('../Models/conn.php');

    $email_logado = $_SESSION['email'];

    $delete_sql = "DELETE FROM usuarios WHERE email = '$email_logado'";

    $resultado = $conn->query($delete_sql);

    session_destroy();

    header('Location: ../Views/Home/index.php?excluir');

?>