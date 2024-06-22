<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Tela_inicial/style.css" rel="stylesheet">
    <?php include '../../Controllers/login_status.php'?>
  </head>
  <body>
    <header class="header_cadastro">
      <div class="homeBtnDiv ">
        <a class="link_logo" href="./index.php"><h2>Home</h2></a>
      </div>
      <nav>
        <div class="mobile_icones">
          <img id="menubtn" class="menu_img" src="../../Public/Img/icone_menu_mobile.png">
          <div id="mobile_menu" class="mobile_menu">
            <a class="link_logo" id="btnCadastroMobile" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" id="btnLoginMobile"  href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
            <a class="link_logo tela_usuario" id="btnTelaUsuarioMobile" href="../Tela_perfil_usuario/"><h2>Perfil</h2></a>
          </div>
        </div>
        <div class="desktop_icones">
            <a class="link_logo" href="./index.php"><h2>Home</h2></a>
            <a class="link_logo" id="btnCadastroDesktop" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" id="btnLoginDesktop" href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
            <a class="link_logo tela_usuario" id="btnTelaUsuarioDesktop" href="../Tela_perfil_usuario/"><h2>Perfil</h2></a>
        </div>
      </nav>
    </header>
    <main>
        <h1 id="main_content">Seja Bem-vindo!</h1>
        <button id="main_contentbtn">Começar</button>
    </main> 
    <script src="../../Public/Tela_inicial/menu.js"></script>
    <script src="../../Public/Tela_inicial/alerta.js"></script>

    <script>
      if (window.innerWidth <= 800 && estaLogado) {
        let btnCadastroMobile = document.getElementById('btnCadastroMobile');
        let btnLoginMobile = document.getElementById('btnLoginMobile');
        let btnTelaUsuarioMobile = document.getElementById('btnTelaUsuarioMobile');

        btnCadastroMobile.style.display = "none";
        btnLoginMobile.style.display = "none";
        btnTelaUsuarioMobile.style.display = "block";
        console.log("estou ativo logado e abaixo de 500px!");

      } else  if (window.innerWidth > 800 && estaLogado){
        let btnCadastroDesktop = document.getElementById('btnCadastroDesktop');
        let btnLoginDesktop = document.getElementById('btnLoginDesktop');
        let btnTelaUsuarioDesktop = document.getElementById('btnTelaUsuarioDesktop');

        btnCadastroDesktop.style.display = "none";
        btnLoginDesktop.style.display = "none";
        btnTelaUsuarioDesktop.style.display = "block";
        console.log("estou ativo logado e acima de 500px!");

      } else  if (window.innerWidth <= 800 && !estaLogado){
        let btnCadastroMobile = document.getElementById('btnCadastroMobile');
        let btnLoginMobile = document.getElementById('btnLoginMobile');
        let btnTelaUsuarioMobile = document.getElementById('btnTelaUsuarioMobile');

        btnCadastroMobile.style.display = "block";
        btnLoginMobile.style.display = "block";
        btnTelaUsuarioMobile.style.display = "none";
        console.log("estou ativo não logado e abaixo de 500px!");

      } else  if (window.innerWidth > 800 && !estaLogado){
        let btnCadastroDesktop = document.getElementById('btnCadastroDesktop');
        let btnLoginDesktop = document.getElementById('btnLoginDesktop');
        let btnTelaUsuarioDesktop = document.getElementById('btnTelaUsuarioDesktop');

        btnCadastroDesktop.style.display = "block";
        btnLoginDesktop.style.display = "block";
        btnTelaUsuarioDesktop.style.display = "none";
        console.log("estou ativo não logado e acima de 500px!");

      } else {
            console.log("Entrou no último else por alguma razão inesperada.");
        }
    </script>
  </body>
</html>