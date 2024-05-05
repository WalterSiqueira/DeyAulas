<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Catálogo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Catalogo/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="header_login">
      <div class="div_logo">
        <a class="link_catalogo" href="../../index.html"><img class="catalogo_img" src="../../Public/Img/icone_catalogo.png"></a>
      </div>
      <nav>
        <div class="mobile_icones">
          <img onclick='abrir_menu()' class="menu_img" src="../../Public/Img/icone_menu_mobile.png">
        </div>
        <div id="menu" class="desktop_icones">
          <a class="link_cadastro" href="../Cadastro"><img  class="cadastro_img" src="../../Public/Img/icone_cadastro.png"></a>
          <img onclick='fechar_menu()' id="fechar" class="fechar_img" src="../../Public/Img/icone_fechar.png"/>
        </div>
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
            <img class="jogo_alfabeto_img" src="../../Public/Img/Catalogo/jogo_alfabeto.png" alt="jogo sobre o alfabeto">
            <h3>Jogo do Alfabeto</h2>
            <button>Jogar</button>
          </div>
        </div>
      </div>
    </main> 
  </body>
<script src="../../Public/Catalogo/index.js"></script>
</html>
