<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Diretor;

class Autenticador
{

    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Autenticação Valida";
        }else{

            echo "Autenticação invalida";
        }

    }

}