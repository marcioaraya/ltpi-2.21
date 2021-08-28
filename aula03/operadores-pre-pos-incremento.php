<?php

$a = 10;

echo 'valor de $a: '.$a.'<br>'; # mostrará o valor 10

# operador de PÓS-INCREMENTO
# $a++ => $a = $a + 1;

echo 'pós-incremento - valor de $a: '.$a++.'<br>';
echo 'depois - valor de $a: '.$a.'<br>';

$a = 10;
# operador de PRÉ-INCREMENTO
# $a++ => $a = $a + 1;

echo 'pré-incremento - valor de $a: '.++$a.'<br>';
echo 'depois - valor de $a: '.$a.'<br>';
