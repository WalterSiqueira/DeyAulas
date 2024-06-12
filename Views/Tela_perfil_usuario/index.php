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
      <div class="div_usuario" id="div_form">
        <img class="user_pic" src="../../Public/Img/foto_usuario.png"/>
        <div class="user_info">
          <table>
            <thead>
              <tr>
                <th>Nome de usuário</th>
                <br>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                  if($user_data['email'] == $email) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
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
  <script src="../../Public/Login/index.js"></script>
</html>
