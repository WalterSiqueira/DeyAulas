window.onload = function() {
    const urlParam = new URLSearchParams(window.location.search);
    if (urlParam.has("sucesso")) {
        alert("Cadastrado com sucesso! Agora faça o login!");
    } else if (urlParam.has("falha")) {
        alert("Falha ao realizar o login! tente novamente!");
    } else if (urlParam.has('sair')) {
        alert("Você saiu da conta com sucesso!");
    }
}