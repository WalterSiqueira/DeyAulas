<?php 

  session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Tela_perfil_usuario/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="header_login">
      <div class="div_logo">
        <a class="link_catalogo" href="../Home/index.html"><img class="catalogo_img" src="../../Public/Img/icone_catalogo.png"></a>
      </div>
      <nav>
        <div class="mobile_icones">
          <img onclick='abrir_menu()' class="menu_img" src="../../Public/Img/icone_menu_mobile.png">
        </div>
        <div id="menu" class="desktop_icones">
          <a class="link_cadastro" href="../Cadastro/index.php" ><img class="cadastro_img" src="../../Public/Img/icone_cadastro.png"></a>
          <img onclick='fechar_menu()' id="fechar" class="fechar_img" src="../../Public/Img/icone_fechar.png"/>
        </div>
    </header>
    <main>
      <div class="div_usuario" id="div_usuario">
        <img class="user_pic" src="../../Public/Img/foto_usuario.png"/>
        <div class="user_info">
          <h3>Nome de usuário</h3>
          <input type="text">
          <h3 class="mostra_inf">Email</h3>
          <input type="text">
        </div>
        <button class="btn_user alterar" id="btn_alterar_senha">Alterar senha</button>
        <button class="btn_user trocar" id="btn_trocar_conta">Trocar de conta</button>
        <button class="btn_user excluir" id="btn_excluir_conta">Excluir conta</button>
      </div>
    </main> 
  </body>
<script src="../../Public/Login/index.js"></script>
</html>