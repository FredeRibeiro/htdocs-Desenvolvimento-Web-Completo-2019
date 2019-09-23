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

    function valorImposto($salario) {
    
        if ($salario <= 1903.98) {

         echo('Funcionario Isento de Imposto');

        }elseif($salario >= 1903.98 && $salario <= 2826.65){
            $salario = ($salario *7.5) / 100;
            echo('Valor Salario com imposto '. $salario);

        }elseif ($salario >= 2826.65 && $salario <= 3751.05) {
            $salario = ($salario * 15) / 100;
            echo ('Valor Salario com imposto ' . $salario);

        } elseif ($salario >= 3751.05 && $salario <= 4664.68) {
            $salario = ($salario * 22.5) / 100;
            echo ('Valor Salario com imposto ' . $salario);
        }else {
            $salario = ($salario * 27.5) / 100;
            echo ('Valor Salario com imposto ' . $salario);
        }
            
    }

   valorImposto(10000)

    ?>
</body>

</html>