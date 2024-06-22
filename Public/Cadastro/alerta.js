window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('email_existente')) {
        alert('Este email já está cadastrado! Tente novamente!');
    }
};
