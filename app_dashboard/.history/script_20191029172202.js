$(document).ready(() => {
    $('#documentacao').on('click', () => {
        //$('#pagina').load('documentacao.html');

        $.get('documentacao.html', data => {
            $('#pagina').html(data)

        });

    });

    $('#documentacao').on('click', () => {
        //$('#pagina').load('documentacao.html');

        $.get('documentacao.html', data => {
            $('#pagina').html(data)

        });

    });
})