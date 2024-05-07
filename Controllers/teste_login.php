<?php 

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../Models/conn.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consulta_sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";

        $resultado = $conn->query($consulta_sql);

        if(mysqli_num_rows($resultado) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: teste_login.php');
        }
        else 
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: /index.php');
        }
    }

?>