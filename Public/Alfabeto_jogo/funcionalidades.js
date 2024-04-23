// Definição do array de palavras
const words = ["GATO", "CACHORRO", "BOLA"]; // Exemplo de palavras
const imgs = [
  "gato.png",
  "cachorro.png",
  "bola.png"
];

// Definição do array de imagens das letras do alfabeto
const alphabetImages = [
  "letra-a.png",
  "letra-b.png",
  "letra-c.png",
  "letra-d.png",
  "letra-e.png",
  "letra-f.png",
  "letra-g.png",
  "letra-h.png",
  "letra-i.png",
  "letra-j.png",
  "letra-k.png",
  "letra-l.png",
  "letra-m.png",
  "letra-n.png",
  "letra-o.png",
  "letra-p.png",
  "letra-q.png",
  "letra-r.png",
  "letra-s.png",
  "letra-t.png",
  "letra-u.png",
  "letra-v.png",
  "letra-w.png",
  "letra-x.png",
  "letra-y.png",
  "letra-z.png"
]; 

// Índice da palavra atual
let currentIndex = 0;

// Função para configurar o jogo
function setupGame() {
  displayWord(); // Chama a função para exibir a palavra na tela
  displayAlphabet(); // Chama a função para exibir o alfabeto na tela
}

// Função para exibir a palavra na tela
function displayWord() {
    const wordElement = document.getElementById("word"); // Obtém o elemento HTML onde a palavra será exibida
    const currentWord = words[currentIndex]; // Obtém a palavra atual do array de palavras
    let displayedWord = '_'; // Inicia a palavra exibida com um underscore (representando letras não reveladas)
    for (let i = 1; i < currentWord.length; i++) { // Começa em 1 para pular a primeira letra
      if (currentWord[i] === '_') { // Se a letra atual for '_', adiciona um underscore à palavra exibida
        displayedWord += '_';
      } else { // Caso contrário, adiciona a letra atual à palavra exibida
        displayedWord += currentWord[i];
      }
    }
    wordElement.textContent = displayedWord; // Define o texto do elemento HTML como a palavra exibida
  }

// Função para exibir o alfabeto na tela
function displayAlphabet() {
  const alphabetElement = document.getElementById("letters"); // Obtém o elemento HTML onde o alfabeto será exibido
  alphabetElement.innerHTML = ""; // Limpa o conteúdo do elemento HTML
  for (let i = 0; i < 26; i++) { // Loop através das letras do alfabeto
    const letter = String.fromCharCode(65 + i); // Converte o código ASCII para obter a letra correspondente
    const li = document.createElement("li"); // Cria um elemento de lista
    const img = document.createElement("img"); // Cria um elemento de imagem
    img.src = `../../Public/Img/img_jogo_alfabeto/${alphabetImages[i]}`; // Define o caminho da imagem da letra
    img.alt = letter; // Define o atributo alt da imagem como a letra
    li.appendChild(img); // Adiciona a imagem como filho do elemento de lista
    li.addEventListener("click", () => checkLetter(letter)); // Adiciona um ouvinte de evento de clique para verificar a letra quando clicada
    alphabetElement.appendChild(li); // Adiciona o elemento de lista ao elemento HTML do alfabeto
    const imageElement = document.getElementById("image"); // Obtém o elemento HTML onde a imagem será exibida
    imageElement.src = `../../Public/Img/img_jogo_alfabeto/${imgs[currentIndex]}`; // Define a URL da imagem correspondente à palavra atual
  }
}

// Função para verificar se a letra está na palavra atual
function checkLetter(letter) {
  const currentWord = words[currentIndex]; // Obtém a palavra atual do array de palavras
  if (currentWord.includes(letter)) { // Verifica se a palavra atual inclui a letra clicada
    const wordElement = document.getElementById("word"); // Obtém o elemento HTML onde a palavra está sendo exibida
    let updatedWord = ''; // Inicializa a palavra atualizada
    for (let i = 0; i < currentWord.length; i++) { // Loop através das letras da palavra atual
      if (currentWord[i] === letter) { // Se a letra atual for igual à letra clicada
        updatedWord += letter; // Adiciona a letra à palavra atualizada
      } else { // Caso contrário
        updatedWord += wordElement.textContent[i]; // Mantém a letra atual da palavra exibida na posição correspondente
      }
    }
    wordElement.textContent = updatedWord; // Atualiza o texto do elemento HTML da palavra para a palavra atualizada
    if (!updatedWord.includes('_')) { // Se não houver mais letras não reveladas na palavra
      setTimeout(changeWord, 1000); // Chama a função para mudar a palavra após 2 segundos
    }
  } else {
    console.log("Letra errada!");
  }
}

// Função para mudar a palavra atual
function changeWord() {
  currentIndex = (currentIndex + 1) % words.length; // Incrementa o índice da palavra atual, voltando ao início se atingir o final do array
  displayWord(); // Exibe a nova palavra na tela

  const imageElement = document.getElementById("image"); // Obtém o elemento HTML onde a imagem será exibida
  imageElement.src = `../../Public/Img/img_jogo_alfabeto/${imgs[currentIndex]}`; // Define a URL da imagem correspondente à palavra atual
}

setupGame(); // Inicia o jogo
