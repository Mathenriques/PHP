<?php

namespace Alura\DesignPattern;

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}