<?php 

  session_start();

  include_once("../../Models/conn.php");

  if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) 
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../Login/index.php');
  }

?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
  <title>Jogo do Alfabeto</title>
  <link rel="stylesheet" href="../../Public/Alfabeto_jogo/style.css">
</head>
<body>
  <div class="container">
    <div class="game">
      <div class="word-container">
        <img id="image" class="img_palavra" src alt="Imagem">
        <p id="word">Palavra_</p>
      </div>
    </div>
    <div class="alphabet">
      <ul id="letters">
        <!-- Aqui vamos adicionar as imagens das letras do alfabeto dinamicamente com JavaScript -->
      </ul>
    </div>
  </div>
  <button id="voltarbtn" class="voltarbtn">Voltar</button>
  <script src="../../Public/Alfabeto_jogo/funcionalidades.js"></script>
  <script src="../../Public/Alfabeto_jogo/voltar.js"></script>
</body>
</html>
