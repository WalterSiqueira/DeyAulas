<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Login/style.css" rel="stylesheet">
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
      <div class="div_form" id="div_form">
        <h2>Login</h2>
        <form action="../../Controllers/teste_login.php" method="post">
          <label>E-mail:</label>
          <input type="email">
          <label>Senha:</label>
          <input type="password">
          <h3>Esqueci minha senha</h3>
          <input type="submit" value="Enviar">
        </form>
      </div>
    </main> 
  </body>
<script src="../../Public/Login/index.js"></script>
</html>
