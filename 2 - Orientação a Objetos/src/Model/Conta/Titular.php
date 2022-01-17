<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {

        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(){

        return $this->endereco;
    }

    public function podeAutenticar(string $senha)
    {
        return $senha === '0987';
    }

}