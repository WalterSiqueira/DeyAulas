window.onload = function() {
    const urlParam = new URLSearchParams(window.location.search);
    if (urlParam.has("sucesso")) {
        alert("Cadastrado com sucesso! Agora faça o login!");
    }
}