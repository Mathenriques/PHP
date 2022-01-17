<?php

namespace Alura\Banco\Model;

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "O nome precisa ter mais de 5 caracteres";
            exit();
        }
    }
}