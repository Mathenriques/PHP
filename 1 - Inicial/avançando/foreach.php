<?php

$conta1 = [
    'titular' => 'Alberto',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'João',
    'saldo' => 1000000
];

$conta3 = [
    'titular' => 'Lucas',
    'saldo' => 20
];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

foreach ($contasCorrentes as $conta){
    echo $conta['saldo'] . PHP_EOL;
}

