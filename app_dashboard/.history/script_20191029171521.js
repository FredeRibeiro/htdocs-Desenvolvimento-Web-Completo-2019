$(document).ready(() => {
    $('#documentacao').on('click', () => {
        $('#pagina').load('documentcao.html');

    });

    $('#suporte').on('click', () => {
        $('#pagina').load('suporte.html');

    });
})