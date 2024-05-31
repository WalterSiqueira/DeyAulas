<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Cadastro/style.css" rel="stylesheet">
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
            <a class="link_logo" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
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
      <div id="div_form" class="div_form">
        <h2>Cadastro</h2>
        <form action="../../Controllers/Cadastro_funcao.php" method="post">
          <label>Nome:</label>
          <input type="text" name="nome">
          <label>E-mail:</label>
          <input type="email" name="email">
          <label>Senha:</label>
          <input type="password" name="senha">
          <button type="submit">Cadastrar</button>
        </form>
      </div>
    </main> 
  </body>
<script src="../../Public/Login/index.js"></script>
</html>
