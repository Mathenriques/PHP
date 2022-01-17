<?php

$altura = 1.8; #Metros
$peso = 89; #Quilos

$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "IMC = $imc peso abaixo";
}
if($imc >= 18.5 && $imc < 24.9){
    echo "IMC = $imc peso normal";
}
if($imc >= 25 && $imc < 29.9){
    echo "IMC = $imc sobrepreso";
}
if($imc >= 30 && $imc < 34.9){
    echo "IMC = $imc obesidade grau I";
}
if($imc >= 35 && $imc < 39.9){
    echo "IMC = $imc obesidade grau II";
}
if($imc >= 40){
    echo "IMC = $imc obesidade grau III ou Mórbida";
}