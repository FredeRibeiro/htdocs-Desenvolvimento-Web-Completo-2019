$(document).ready(() => {
    $('#documentacao').on('click', () => {
        $('#pagina').load('documentcao.html');

    });

    $('#suporte').on('click', () => {
        console.log('link suporte clicado');

    });
})