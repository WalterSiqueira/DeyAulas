<?php 

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../Models/conn.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consulta_sql = "SELECT * FROM usuarios WHERE email=? AND senha=?";

        $stmt = $conn->prepare($consulta_sql);

        $stmt->bind_param("ss", $email, $senha);

        $stmt->execute();

        $resultado = $stmt->get_result();

        if($resultado->num_rows < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: /deyaulas/Controllers/teste_login.php');
        }
        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: /deyaulas/index.php');
        }
    }

?>