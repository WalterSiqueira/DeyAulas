document.addEventListener('DOMContentLoaded', (event) => {
    const toggleDisplay = (formId) => {
        const form = document.getElementById(formId);
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    };

    document.getElementById('btn_alterar_senha').addEventListener('click', () => {
        toggleDisplay('atualizarSenha');
    });

    document.getElementById('btn_trocar_conta').addEventListener('click', () => {
        toggleDisplay('atualizarEmail');
    });

    document.getElementById('btn_excluir_conta').addEventListener('click', () => {
        toggleDisplay('excluirConta');
    });
});
