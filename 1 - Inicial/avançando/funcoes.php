<?php

function sacar(array $conta, float $valorSaque)
{
    if ($valorSaque > $conta['saldo']){
        echo "Você não pode sacar esse valor!";
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito)
{
    $conta['saldo'] += $valorDeposito;
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular. Saldo: R$ $saldo </li>";
}