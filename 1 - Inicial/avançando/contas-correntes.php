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

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) {

    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}