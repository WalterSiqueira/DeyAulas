const completar_palavra = document.getElementById('completar_palavra');
const quiz = document.getElementById('quiz');
const forca = document.getElementById('forca');

completar_palavra.addEventListener('click', function() {
  window.location.href="../../Views/Alfabeto_jogo/index.php"  
})

quiz.addEventListener('click', function() {
  window.location.href="../../Views/Quiz/index.php"  
})

forca.addEventListener('click', function() {
  window.location.href="../../Views/Forca_jogo/index.php"  
})