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
    $('#competencia').on('change', e => {

        let competencia = $(e.target).val();

        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`,
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas);
                $('#numeroVendas').html(dados.totalVendas);

            },
            error: erro => {
                console.log(erro);

            },
        });

        //Metodo da requisição, URL, Dados, sucesso ou erro

    })
})