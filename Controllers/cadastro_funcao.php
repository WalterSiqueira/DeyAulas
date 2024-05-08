<?php
    session_start();

    include "../Models/conn.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $consulta_sql = "SELECT * FROM usuarios WHERE email = '$email'";

    $resultado_consulta = $conn->query($consulta_sql);

    if(mysqli_num_rows($resultado_consulta) > 0) {
        unset($_SESSION['email']);
        header('Location: ../index.php');
        print_r("Email já cadastrado.");
    }
    else
    {
        $resultado_insert = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')");
        header("Location: ../Views/Login/index.php");
    }

    



  
 