<?php

use Alura\DesignPattern\CalculadoraDescontos;
use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// Calculadora de Impostos
// $calculadora = new CalculadoraImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());

// Calculadora de Descontos
$calculadora = new CalculadoraDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->qtdItens = 6;

echo $calculadora->calculaDescontos($orcamento);