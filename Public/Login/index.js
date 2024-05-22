const conteudo_main = document.getElementById("div_form");
const menubtn = document.getElementById("menubtn");
const mobile_menu = document.getElementById("mobile_menu");
var status = "fechado";

menubtn.addEventListener("click", function() {
    if (status === 'fechado') {
        mobile_menu.style.display = 'flex';
        conteudo_main.style.display = 'none';
        status = 'aberto';
    } else if (status === 'aberto') {
        mobile_menu.style.display = 'none';
        conteudo_main.style.display = '';
        status = 'fechado';
    }
});
