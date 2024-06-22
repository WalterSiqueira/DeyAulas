window.onload = function() {
    const urlParam = new URLSearchParams(window.location.search);
    if (urlParam.has('logado')) {
        alert("Logado com sucesso!");
    } else if (urlParam.has('excluir')) {
        alert("Conta excluida com sucesso!");
    }
}