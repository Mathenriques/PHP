<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$propriedadePrivada = $reflectionClass->getProperty('propriedadePrivada');
// var_dump(Reflection::getModifierNames($propriedadePrivada->getModifiers()));

if (!$propriedadePrivada->isPublic()) {
    $propriedadePrivada->setAccessible(true);
}

var_dump($propriedadePrivada->getValue($reflectionClass->newInstanceWithoutConstructor()));


// ------------------------------------------------------- Métodos: -------------------------------------------------------  
$reflectionMethod = $reflectionClass->getMethod('metodoPublico');
var_dump($reflectionMethod->getDocComment());


$reflectionMethod = $reflectionClass->getMethod('metodoProtegido');
$reflectionMethod->setAccessible(true);
var_dump($reflectionMethod->invoke($reflectionClass->newInstanceWithoutConstructor()));

/*
var_dump($reflectionMethod->getNumberOfParameters());
var_dump($reflectionMethod->getNumberOfRequiredParameters());

$parameters = array_filter(
    $reflectionMethod->getParameters(),
    fn (ReflectionParameter $parameter) => !$parameter->isOptional()
);

foreach ($parameters as $parameter) {
    if (!$parameter->hasType()) {
        throw new DomainException("$parameter não possui tipagem");
    }
    echo $parameter->getType() . PHP_EOL;
}

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();
$reflectionMethod->invoke($objetoClasseExemplo, 'mensagem qualquer');
*/
