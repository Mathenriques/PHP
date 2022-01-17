<?php


use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Conta\ContaCorrente;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->depositar(500);
$conta->sacar(700);

echo $conta->recuperaSaldo();
