<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio de Fixação</title>
</head>

<body>
    <?php

    $idade = 15;
    $peso = 49;

    if (($idade >=16 && $idade <= 69) && $peso >= 50) {
        echo('Atende os Requisitos');
    }else {
        echo('Não atende os requisitos');
    }

    ?>
</body>

</html>