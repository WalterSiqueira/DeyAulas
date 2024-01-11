const menu = document.getElementById('menu');
const fechar = document.getElementById('fechar');
const form_div = document.getElementById('div_form');


function abrir_menu() {
  console.log('abrir!');
  menu.style.display = 'flex';
  form_div.style.display = 'none'; 
}

function fechar_menu() {
  console.log('fechar!');
  menu.style.display = 'none';
  form_div.style.display = 'grid';
}
