<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeyAulas - cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="../../Public/Carregamento/style.css" rel="stylesheet">
  </head>
  <body>
    <main>
        <h1>Deyaulas</h1>
        <div class="loader-container">
            <div class="loader"></div>
        </div>
        <h4>CARREGANDO...</h4>
    </main>
  </body>
  <script>
    // Simulação de carregamento
    window.addEventListener('load', function() {
    var loader = document.querySelector('.loader');
    loader.style.width = '100%';
    });

  </script>
</html>