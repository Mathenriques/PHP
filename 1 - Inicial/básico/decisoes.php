<?php

$idade = 20;

echo 'Você só pode entrar se tiver mais que 18 anos' . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade, pode entrar!";
} else
echo 'Você não tem a idade permitida';