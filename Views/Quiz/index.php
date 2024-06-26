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
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Quiz - Acerte o nome">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <title>Quiz - Acerte o nome!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Public/Quiz/style.css">
</head>
<body>
	<div id="wrapper">
		<h3>Selecione a alternativa correta:</h3>
		<div id="result"></div>
		<div id="pontos"></div>
		<div id="imagem"></div>
		
		<ul>
			<li class="alternativa"></li>
			<li class="alternativa"></li>
			<li class="alternativa"></li>
			<li class="alternativa"></li>
		</ul>
	</div>
	
	<button id="voltarbtn" class="voltarbtn">Voltar</button>
	<script src="../../Public/Alfabeto_jogo/voltar.js"></script>
	<script src="../../Public/Quiz/script.js"></script>
	
</body>
</html>












