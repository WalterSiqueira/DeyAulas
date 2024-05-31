let tentativas = 6;
let listaDinamica = [];
let palavraSecretaCategoria;
let palavraSecretaSorteada;

const palavras = [
    palavra001 = {
        nome: "IRLANDA",
        categoria: "LUGARES"
    },
    palavra002 = {
        nome: "EQUADOR",
        categoria: "LUGARES"
    },
    palavra003 = {
        nome: "CHILE",
        categoria: "LUGARES"
    },
    palavra004 = {
        nome: "INDONESIA",
        categoria: "LUGARES"
    },
    palavra005 = {
        nome: "MALDIVAS",
        categoria: "LUGARES"
    },
    palavra006 = {
        nome: "INGLATERRA",
        categoria: "LUGARES"
    },
    palavra007 = {
        nome: "GROELANDIA",
        categoria: "LUGARES"
    },
    palavra008 = {
        nome: "UZBEQUISTAO",
        categoria: "LUGARES"
    },
    palavra009 = {
        nome: "INDONESIA",
        categoria: "LUGARES"
    },
    palavra010 = {
        nome: "CREGUENHEM",
        categoria: "LUGARES"
    },
    palavra011 = {
        nome: "BICICLETA",
        categoria: "TRANSPORTES"
    },
    palavra012 = {
        nome: "AVIAO",
        categoria: "TRANSPORTES"
    },
    palavra013 = {
        nome: "NAVIO",
        categoria: "TRANSPORTES"
    },
    palavra014 = {
        nome: "AERONAVE",
        categoria: "TRANSPORTES"
    },
    palavra015 = {
        nome: "TREM",
        categoria: "TRANSPORTES"
    },
    palavra016 = {
        nome: "BARCO",
        categoria: "TRANSPORTES"
    },
    palavra017 = {
        nome: "JANGADA",
        categoria: "TRANSPORTES"
    },
    palavra018 = {
        nome: "CARRO",
        categoria: "TRANSPORTES"
    },
    palavra019 = {
        nome: "MOTO",
        categoria: "TRANSPORTES"
    },
    palavra020 = {
        nome: "TRICICLO",
        categoria: "TRANSPORTES"
    },
    palavra021 = {
        nome: "XICARA",
        categoria: "OBJETOS"
    },
    palavra022 = {
        nome: "MOEDA",
        categoria: "OBJETOS"
    },
    palavra023 = {
        nome: "PRATO",
        categoria: "OBJETOS"
    },
    palavra024 = {
        nome: "SINO",
        categoria: "OBJETOS"
    },
    palavra025 = {
        nome: "CHUVEIRO",
        categoria: "OBJETOS"
    },
    palavra026 = {
        nome: "VIOLAO",
        categoria: "OBJETOS"
    },
    palavra027 = {
        nome: "LAMPADA",
        categoria: "OBJETOS"
    },
    palavra028 = {
        nome: "LAPIS",
        categoria: "OBJETOS"
    },
    palavra029 = {
        nome: "LIVRO",
        categoria: "OBJETOS"
    },
    palavra030 = {
        nome: "BOLA",
        categoria: "OBJETOS"
    },
    palavra031 = {
        nome: "MELANCIA",
        categoria: "ALIMENTOS"
    },
    palavra032 = {
        nome: "BANANA",
        categoria: "ALIMENTOS"
    },
    palavra033 = {
        nome: "UVA",
        categoria: "ALIMENTOS"
    },
    palavra034 = {
        nome: "FEIJAO",
        categoria: "ALIMENTOS"
    },
    palavra035 = {
        nome: "ARROZ",
        categoria: "ALIMENTOS"
    },
    palavra036 = {
        nome: "CARNE",
        categoria: "ALIMENTOS"
    },
    palavra037 = {
        nome: "MASSA",
        categoria: "ALIMENTOS"
    },
    palavra038 = {
        nome: "DOCE",
        categoria: "ALIMENTOS"
    },
    palavra039 = {
        nome: "GOIABADA",
        categoria: "ALIMENTOS"
    },
    palavra040 = {
        nome: "LEITE",
        categoria: "ALIMENTOS"
    },
    palavra041 = {
        nome: "MACACO",
        categoria: "ANIMAIS"
    },
    palavra042 = {
        nome: "BALEIA",
        categoria: "ANIMAIS"
    },
    palavra043 = {
        nome: "COBRA",
        categoria: "ANIMAIS"
    },
    palavra044 = {
        nome: "LEAO",
        categoria: "ANIMAIS"
    },
    palavra045 = {
        nome: "SAPO",
        categoria: "ANIMAIS"
    },
    palavra046 = {
        nome: "CROCODILO",
        categoria: "ANIMAIS"
    },
    palavra047 = {
        nome: "CACHORRO",
        categoria: "ANIMAIS"
    },
    palavra048 = {
        nome: "GATO",
        categoria: "ANIMAIS"
    },
    palavra049 = {
        nome: "PASSARO",
        categoria: "ANIMAIS"
    },
    palavra050 = {
        nome: "TATU",
        categoria: "ANIMAIS"
    },

];



criarPalavraSecreta();
function criarPalavraSecreta(){
    const indexPalavra = parseInt(Math.random() * palavras.length)
    
    palavraSecretaSorteada = palavras[indexPalavra].nome;
    palavraSecretaCategoria = palavras[indexPalavra].categoria;
    console.log(palavraSecretaSorteada)
    console.log(palavraSecretaCategoria)

}

montarPalavraNatela();
function montarPalavraNatela(){
    const categoria = document.getElementById("categoria");
    categoria.innerHTML = palavraSecretaCategoria;

    const palavraTela = document.getElementById("palavra-secreta");
    palavraTela.innerHTML = "";

    for(i =0; i < palavraSecretaSorteada.length; i++){
        if (listaDinamica[i] == undefined){
            listaDinamica[i] = "&nbsp;"
            palavraTela.innerHTML = palavraTela.innerHTML + "<div class='letras'>" + listaDinamica[i] + "</div>"
        }
        else{
            palavraTela.innerHTML = palavraTela.innerHTML + "<div class='letras'>" + listaDinamica[i] + "</div>"
        }
        
    }




}

function verificaLetraEscolhida(letra){
    document.getElementById("tecla-" + letra).disabled = true;
    if (tentativas > 0)
    {
        mudarStyleLetra("tecla-" + letra);
        comparalistas(letra);
        montarPalavraNatela();
    }
    
}

function mudarStyleLetra(tecla){
    document.getElementById(tecla).style.background = "#32CD32";
    document.getElementById(tecla).style.color = "#000000";
}

function comparalistas(letra){
    const pos = palavraSecretaSorteada.indexOf(letra)
    if (pos < 0){
        tentativas--
        carregaImagemForca();

        if(tentativas == 0){
            abreModal("Ops!", "<h3>Que pena! Não  foi dessa vez... a palavra secreta era:<h3><br>" + palavraSecretaSorteada);
        }
        
    }
    else{
        for(i = 0; i < palavraSecretaSorteada.length; i++)
        {
            if (palavraSecretaSorteada[i] == letra){
                listaDinamica[i] = letra;
            }
        }
    }

    let vitoria = true;
    for(i = 0; i < palavraSecretaSorteada.length; i++){
        if(palavraSecretaSorteada[i] != listaDinamica[i]){
            vitoria = false;
        }
    }
    if(vitoria == true)
    {
        abreModal("Parabéns!", "<h3>Você é um grande vencedor!<h3><br>");
        tentativas = 0;
    }
}

function carregaImagemForca(){
    switch(tentativas){
        case 5:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca01.png')";
            break;
        case 4:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca02.png')";
            break;
        case 3:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca03.png')";
            break; 
        case 2:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca04.png')";
            break;
        case 1:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca05.png')";
            break;
        case 0:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca06.png')";
            break;  
        default:
            document.getElementById("imagem").style.background = "url('../../Public/Img/forca.png')";
            break; 
    }
}

function abreModal(titulo, mensagem){
    let modalTitulo = document.getElementById("exampleModalLabel");
    modalTitulo.innerText = titulo;

    let modalBody = document.getElementById("modalbody");
    modalBody.innerHTML = mensagem;
    
    $("#myModal").modal({
        show: true
    });
}

let btnReiniciar = document.querySelector("#btn-reiniciar")
btnReiniciar.addEventListener("click", function(){

    location.reload();

});



