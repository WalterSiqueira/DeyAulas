const sair_conta = document.getElementById('btn_sair_conta');
const excluir_conta = document.getElementById('btn_excluir_conta');
sair_conta.addEventListener("click", function() {
    window.location.href="../../Controllers/sair_conta.php"
});

excluir_conta.addEventListener("click", function() {
    window.location.href="../../Controllers/excluir_conta.php"
});