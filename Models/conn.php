<?php
$server = "127.0.0.1";
$user = "root";
$senha = "DSms8842BI";
$banco = "controledeyaulas";

$conn = new mysqli($server, $user, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

