<?php

/*
    * require => A requisição é mt importante, caso esteja errada retornará um ERROR
    * require_once => A requisição é mt importante, caso esteja errada retornará um ERROR, além disso garante que ela seja chamada apenas uma vez.
    * include => A requisição não é mt importante, caso esteja errada retornará um WARMING
    */

require 'funcoes.php';

$contasCorrentes = [
    '123.456.789-00' => [
        'titular' => 'Alberto',
        'saldo' => 1000
    ],

    '123.456.789-10' => [
        'titular' => 'João',
        'saldo' => 1000000
    ],

    '123.456.789-99' => [
        'titular' => 'Lucas',
        'saldo' => 20
    ],
];

$contasCorrentes['123.456.789-00'] = sacar($contasCorrentes['123.456.789-00'], 500);
$contasCorrentes['123.456.789-00'] = depositar($contasCorrentes['123.456.789-00'], 12500);

unset($contasCorrentes['123.456.789-00']);

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta){

//     // list('titular' => $titular, 'saldo' => $saldo) = $conta;
//     // ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     // exibeMensagem(
//     //     "$cpf $titular $saldo"
//     // );

//     exibeConta($conta);
// }

// echo "</ul>";'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>

<body>
    <h1>Contas Conrrentes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h4>
                    <?= $conta['titular']; ?> - <?= $cpf; ?>
                </h4>
            </dt>
            <dd>
                Saldo: R$ <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>