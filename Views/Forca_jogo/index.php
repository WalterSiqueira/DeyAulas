<<<<<<< HEAD
=======
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

>>>>>>> main
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <link rel="icon" href="../../Public/Img/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/Forca_jogo/forca.css" >
    <title>Jogo da forca</title>
</head>
<body>
    <div class="container">

        <div id="imagem"></div>

        <div id="palavra-secreta">
            <!--<div class="letras">A</div>
            <div class="letras">F</div>
            <div class="letras">G</div>
            <div class="letras">A</div>
            <div class="letras">E</div>
            <div class="letras">I</div>-->
        </div>
        <div id="teclado">
            <div class="teclas">
                <button id="tecla-A" onclick="verificaLetraEscolhida('A')">A</button>
                <button id="tecla-B" onclick="verificaLetraEscolhida('B')">B</button>
                <button id="tecla-C" onclick="verificaLetraEscolhida('C')">C</button>
                <button id="tecla-D" onclick="verificaLetraEscolhida('D')">D</button>
                <button id="tecla-E" onclick="verificaLetraEscolhida('E')">E</button>
                <button id="tecla-F" onclick="verificaLetraEscolhida('F')">F</button>
                <button id="tecla-G" onclick="verificaLetraEscolhida('G')">G</button>
                <button id="tecla-H" onclick="verificaLetraEscolhida('H')">H</button>
                <button id="tecla-I" onclick="verificaLetraEscolhida('I')">I</button>
            </div>
            <div class="teclas">
                <button id="tecla-J" onclick="verificaLetraEscolhida('J')">J</button>
                <button id="tecla-K" onclick="verificaLetraEscolhida('K')">K</button>
                <button id="tecla-L" onclick="verificaLetraEscolhida('L')">L</button>
                <button id="tecla-M" onclick="verificaLetraEscolhida('M')">M</button>
                <button id="tecla-N" onclick="verificaLetraEscolhida('N')">N</button>
                <button id="tecla-O" onclick="verificaLetraEscolhida('O')">O</button>
                <button id="tecla-P" onclick="verificaLetraEscolhida('P')">P</button>
                <button id="tecla-Q" onclick="verificaLetraEscolhida('Q')">Q</button>
                <button id="tecla-R" onclick="verificaLetraEscolhida('R')">R</button>
            </div>
            <div class="teclas">
                <button id="tecla-S" onclick="verificaLetraEscolhida('S')">S</button>
                <button id="tecla-T" onclick="verificaLetraEscolhida('T')">T</button>
                <button id="tecla-U" onclick="verificaLetraEscolhida('U')">U</button>
                <button id="tecla-V" onclick="verificaLetraEscolhida('V')">V</button>
                <button id="tecla-W" onclick="verificaLetraEscolhida('W')">W</button>
                <button id="tecla-X" onclick="verificaLetraEscolhida('X')">X</button>
                <button id="tecla-Y" onclick="verificaLetraEscolhida('Y')">Y</button>
                <button id="tecla-Z" onclick="verificaLetraEscolhida('Z')">Z</button>
                <button id="btn-reiniciar">🕹️</button>
            </div>

        </div>
        <div id="categoria">
            

        </div>
        <!-- inicio Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" id="modalbody"></div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
                </div>
            </div>
        <!-- fim Modal -->

    </div>

    <button id="voltarbtn" class="voltarbtn">Voltar</button>
    <script src="../../Public/Forca_jogo/forca.js"></script>
    <script type="text/javascript" src="../../Public/Quiz/script.js"></script>
	<script src="../../Public/Alfabeto_jogo/voltar.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>