<?php 

  session_start();

  include_once('../../Models/conn.php');

  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../Login/index.php');
    }
    
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    
    $result = $conn->query($sql);

    $logado = isset($_SESSION['logado']) && $_SESSION['logado'] = true;
?>

<script>
    var estaLogado = <?php echo json_encode($logado); ?>
</script>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - Usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Tela_perfil_usuario/style.css" rel="stylesheet">
    
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
            <a class="link_logo" id="btnCadastroMobile" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" id="btnLoginMobile"  href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
            <a class="link_logo tela_usuario" id="btnTelaUsuarioMobile" href="../Tela_perfil_usuario/"><h2>Perfil</h2></a>
          </div>
        </div>
        <div class="desktop_icones">
            <a class="link_logo" href="../Home/index.php"><h2>Home</h2></a>
            <a class="link_logo" id="btnCadastroDesktop" href="../Cadastro/"><h2>Cadastro</h2></a>
            <a class="link_logo" id="btnLoginDesktop" href="../Login/"><h2>Login</h2></a>
            <a class="link_logo" href="../Catalogo/"><h2>Catálogo</h2></a>
            <a class="link_logo tela_usuario" id="btnTelaUsuarioDesktop" href="../Tela_perfil_usuario/"><h2>Perfil</h2></a>
        </div>
      </nav>
    </header>
    <main>
      <div class="div_usuario" id="div_form">
        <img class="user_pic" src="../../Public/Img/foto_usuario.png"/>
        <div class="user_info">
          <table>
            <thead>
              <tr>
                <th>Nome de usuário:</th>
                <th class="thEmail">Email:</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                  if($user_data['email'] == $email) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td class='tdEmail'>" . $user_data['email'] . "</td>";
                    echo "</tr>";
                  }
                  
                }
              ?>
            </tbody>
          </table>
        </div>
        <!--<button class="btn_user alterar" id="btn_alterar_senha">Alterar senha</button>-->
        <button class="btn_user trocar" id="btn_sair_conta">Sair da conta</button>
        <button class="btn_user excluir" id="btn_excluir_conta">Excluir conta</button>
      </div>
      <!-- <form class="senha" id="atualizarSenha">
        <h2>Atualize sua senha</h2>
        <h3>Insira sua senha atual e sua nova senha</h3>
        <label>Senha atual:</label>
        <input class="input_form_escondido" type="password">
        <label>Nova senha:</label>
        <input class="input_form_escondido" type="password">
        <label>Confirmar nova senha:</label>
        <input class="input_form_escondido" type="password">
        <button>Pronto</button>
        <button id="btn_cancelar_senha">Cancelar</button>
      </form>
      <form class="email" id="atualizarEmail">
        <h2>Atualize seu e-mail</h2>
        <label>Novo e-mail:</label>
        <input class="input_form_escondido" type="text">
        <label>Informe sua senha:</label>
        <input class="input_form_escondido" type="password">
        <button>Pronto</button>
        <button id="btn_cancelar_troca">Cancelar</button>
      </form>
      <form class="conta" id="excluirConta">
        <h2>Tem certeza que quer excluir sua conta?</h2>
        <button>Sim</button>
        <button id="btn_cancelar_excluir">Não</button>
      </form> -->
    </main> 
  </body>
  <script>
    let sair_conta = document.getElementById("btn_sair_conta");
    let excluir_conta = document.getElementById("btn_excluir_conta");
    let menubtn = document.getElementById("menubtn");
    let mobile_menu = document.getElementById("mobile_menu");
    var status = "fechado";

    menubtn.addEventListener("click", function() {
        if (status === 'fechado') {
            mobile_menu.style.display = 'flex';
            sair_conta.style.display = 'none';
            excluir_conta.style.display = 'none';
            status = 'aberto';
        } else if (status === 'aberto') {
            mobile_menu.style.display = 'none';
            sair_conta.style.display = '';
            excluir_conta.style.display = '';
            status = 'fechado';
        }
    });

  </script>
  <script >
    sair_conta.addEventListener("click", function() {
        window.location.href="../../Controllers/sair_conta.php"
    });

    excluir_conta.addEventListener("click", function() {
        window.location.href="../../Controllers/excluir_conta.php"
    });
  </script>
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
</html>
