<?php
include "../Models/conn.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("");
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "erro ao inserir os dados!" . $stmt->error;
}

$stmt->close();
$conn->close();