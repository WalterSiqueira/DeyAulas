<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Catálogo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Catalogo/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="header_cadastro">
      <div class="homeBtnDiv ">
        <a class="link_logo" href="../Home/index.php"><h2>Home</h2></a>
      </div>
      <nav>
        <div class="mobile_icones">
          <img id="menubtn" class="menu_img" src="../../Public/Img/icone_menu_mobile.png">
          <div id="mobile_menu" class="mobile_menu">
            <a class="link_logo" href="../Cadastro/"><h2 class="h2">Cadastro</h2></a>
            <a class="link_logo" href="../Login/"><h2 class="h2">Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2 class="h2">Catálogo</h2></a>
          </div>
        </div>
        <div class="desktop_icones">
            <a class="link_logo" href="../Home/index.php"><h2>Home</h2></a>
            <a class="link_logo" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
        </div>
      </nav>
    </header>
    <main>
      <div class="div_form" id="div_form">
        <h2>Catálogo de jogos</h2>
        <div class="jogos">
          <div class="div_jogo_alfabeto">
            <img class="jogo_alfabeto_img" src="../../Public/Img/Catalogo/jogo_alfabeto.png" alt="jogo sobre o alfabeto">
            <h3>Jogo do Alfabeto</h2>
            <button id="completar_palavra">Jogar</button>
          </div>
          <div class="div_jogo_alfabeto">
            <img class="jogo_alfabeto_img" src="../../Public/Img/Catalogo/jogo_quiz.png" alt="jogo quiz para adivinhar a imagem">
            <h3>Jogo do Alfabeto</h2>
            <button id="quiz">Jogar</button>
          </div>
          <div class="div_jogo_alfabeto">
            <img class="jogo_alfabeto_img" src="../../Public/Img/Catalogo/forca_img.png" alt="advinhar a palavra em 3 tentativas">
            <h3>Jogo da forca</h2>
            <button id="forca">Jogar</button>
          </div>
        </div>
      </div>
    </main> 
  </body>
<script src="../../Public/Catalogo/index.js"></script>
<script src="../../Public/Login/index.js"></script>
</html>
