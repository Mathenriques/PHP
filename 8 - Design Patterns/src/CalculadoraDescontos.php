<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontosMais5Itens;
use Alura\DesignPattern\Descontos\DescontosMais500Reais;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontosMais5Itens(
            new DescontosMais500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}