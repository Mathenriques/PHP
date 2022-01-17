<?php

$idadeLista = [12, 13, 14, 16, 23, 45, 24];

for ($i=0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}

echo "Lista Invertida" . PHP_EOL;

for ($i=6; $i >= 0 ; $i--) {
    echo $idadeLista[$i] . PHP_EOL;
}