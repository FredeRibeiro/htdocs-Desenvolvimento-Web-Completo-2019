$(document).ready(() => {
    $('#documentacao').on('click', () => {
        //$('#pagina').load('documentacao.html');

        /* $.get('documentacao.html', data => {
            $('#pagina').html(data)

        }); */

        $.post('documentacao.html', data => {
            $('#pagina').html(data)

        });

    });

    $('#suporte').on('click', () => {
        //$('#pagina').load('documentacao.html');

        /* $.get('suporte.html', data => {
            $('#pagina').html(data)

        }); */

        $.post('suporte.html', data => {
            $('#pagina').html(data)

        });

    });

    //Ajax
    $(#competencia).on('change', e => {
        console.log($(e.target).val());

    })
})