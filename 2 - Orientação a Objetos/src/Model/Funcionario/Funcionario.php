<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;


abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    public function recuperaSalario()
    {

        return $this->salario;
    }

    public function alteraNome($nome)
    {
        $this->pessoa->validaNome($nome);
        $this->nome = $nome;
    }


    public function recebeAumento(int $valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Valor do aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract function calculaBonificacao(): float;

}