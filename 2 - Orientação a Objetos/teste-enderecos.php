<?php

use Alura\Banco\Model\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco('Teste', 'Bairro do teste', 'Rua teste', '1234');
$doisEndereco = new Endereco('Teste', 'Bairro do teste', 'Rua teste', '1856');

echo $umEndereco;