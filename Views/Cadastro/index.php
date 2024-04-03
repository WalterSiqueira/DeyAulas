<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Cadastro/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="header_cadastro">
      <div class="div_logo">
        <a class="link_logo" href="../../index.html"><img class="catalogo_img" src="../../Public/Img/icone_catalogo.png"></a>
      </div>
      <nav>
        <div class="mobile_icones">
          <img class="menu_img" src="../../Public/Img/icone_menu_mobile.png">
        </div>
        <div class="desktop_icones">
          <a class="link_login" href="../Login"><img  class="login_img" src="../../Public/Img/icone_login.png"></a>
        </div>
      </nav>
    </header>
    <main>
      <div class="div_form">
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
</html>
