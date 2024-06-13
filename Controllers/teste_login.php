<?php 

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../Models/conn.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consulta_sql = "SELECT * FROM usuarios WHERE email='$email'";

        $resultado = $conn->query($consulta_sql);

        $sql_assoc = $resultado->fetch_assoc();  

        if(password_verify($senha, $sql_assoc['senha']))
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_session['logado'] = true;
            header('Location: /deyaulas/Views/Home/index.php');
        }
        else 
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['logado']);
            header('Location: /deyaulas/Views/Login/index.php');
        }
    }