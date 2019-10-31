$(document).ready(() => {
    $('#documentacao').on('click', () => {
        //$('#pagina').load('documentacao.html');

        $.get('documentacao.html', data => {
            console.log(data);

        });

    });

    $('#suporte').on('click', () => {
        //$('#pagina').load('suporte.html');

    });
})