document.addEventListener('DOMContentLoaded', (event) => {
    const showForm = (formId) => {
        const form = document.getElementById(formId);
        form.style.display = 'block';
    };

    const hideForm = (formId) => {
        const form = document.getElementById(formId);
        form.style.display = 'none';
    };

    document.getElementById('btn_alterar_senha').addEventListener('click', () => {
        showForm('atualizarSenha');
    });

    document.getElementById('btn_cancelar_senha').addEventListener('click', (event) => {
        event.preventDefault();
        hideForm('atualizarSenha');
    });

    document.getElementById('btn_trocar_conta').addEventListener('click', () => {
        showForm('atualizarEmail');
    });

    document.getElementById('btn_cancelar_troca').addEventListener('click', (event) => {
        event.preventDefault();
        hideForm('atualizarEmail');
    });

    document.getElementById('btn_excluir_conta').addEventListener('click', () => {
        showForm('excluirConta');
    });

    document.getElementById('btn_cancelar_excluir').addEventListener('click', (event) => {
        event.preventDefault();
        hideForm('excluirConta');
    });
});
