const conteudo_main = document.getElementById("main_content");
const conteudo_mainbtn = document.getElementById("main_contentbtn");
const menubtn = document.getElementById("menubtn");
const mobile_menu = document.getElementById("mobile_menu");
var status = "fechado";

menubtn.addEventListener("click", function() {
    if (status === 'fechado') {
        mobile_menu.style.display = 'flex';
        conteudo_main.style.display = 'none';
        conteudo_mainbtn.style.display = 'none';
        status = 'aberto';
    } else if (status === 'aberto') {
        mobile_menu.style.display = 'none';
        conteudo_main.style.display = '';
        conteudo_mainbtn.style.display = '';
        status = 'fechado';
    }
});

conteudo_mainbtn.addEventListener("click", function() {
    window.location.href="../Cadastro";
});
