<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador;
$umDiretor = new Diretor(
    'Paulo Cohen',
    new CPF('123.456.789-10'),
    400000
);

$autenticador->tentaLogin($umDiretor, '1234');