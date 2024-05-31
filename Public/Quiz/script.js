let perguntas = [
  {
    titulo: 'Gato',
    imagem: '../../Public/Img/Quiz/gato.png',
    alternativas: ['Onça', 'Gato', 'Cachorro', 'Elefante'],
    correta: 1
  },
  {
    titulo: 'Fire',
    imagem: '../../Public/Img/Quiz/fogo.png',
    alternativas: ['Fogo', 'Agua', 'Terra', 'Ar'],
    correta: 0
  },
  {
    titulo: 'Bird',
    imagem: '../../Public/Img/Quiz/passaro.png',
    alternativas: ['Gato', 'Urubu', 'Pombo', 'Passaro'],
    correta: 3
  }
];

let app = {
  start: function(){
    this.Atualpos = 0;
    this.Totalpontos = 0;

    let alts = document.querySelectorAll('.alternativa');
    alts.forEach((element,index)=>{
      element.addEventListener('click', ()=>{
        this.checaResposta(index);
      });
    });
    this.atualizaPontos();
    app.mostraquestao(perguntas[this.Atualpos]);
  },

  mostraquestao: function(q){
    this.qatual = q;
    // mostrando o titulo
    // mostrando as alternativas
    let alts = document.querySelectorAll('.alternativa');
    alts.forEach(function(element,index){
      element.textContent = q.alternativas[index];
    });
    // mostrando a imagem
    let imageDiv = document.getElementById('imagem');
    imageDiv.style.backgroundImage = `url(${q.imagem})`;
  },

  Proximaperg: function(){
    this.Atualpos++;
    if(this.Atualpos == perguntas.length){
      this.Atualpos = 0;
    }
  },

  checaResposta: function(user){
    if(this.qatual.correta == user){
      console.log("Correta");
      this.Totalpontos++;
      this.mostraresposta(true);
    }
    else{
      console.log("Errada");
      this.mostraresposta(false);
    }
    this.atualizaPontos();
    this.Proximaperg();
    this.mostraquestao(perguntas[this.Atualpos]);
  },

  atualizaPontos: function(){
      let scoreDiv = document.getElementById('pontos');
      scoreDiv.textContent = `Sua pontuação: ${this.Totalpontos}`;
  },

  mostraresposta: function (correto) {
      let resultDiv = document.getElementById('result');
      let result = '';
      // formate a mensagem a ser exibida
      if (correto) {
        result = 'Resposta Correta!';
      }
      else {
        // obtenha a questão atual
        let pergunta = perguntas[this.Atualpos];
        // obtenha o índice da resposta correta da questão atual
        let cindice = pergunta.correta;
        // obtenha o texto da resposta correta da questão atual
        let ctexto = pergunta.alternativas[cindice];
        result = `Incorreto! Resposta Correta: ${ctexto}`;
      }
      resultDiv.textContent = result;
    }
};

app.start();
