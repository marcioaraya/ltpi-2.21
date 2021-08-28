<?php

$b = 0;
$a = 10;

// incorreto!
// está atribuindo o valor de $b para a variável $a
if ($a = $b) {
    echo "Valores iguais<br>";
    echo '$a:'.$a.' $b:'.$b.'<br>';
} else {
    echo "Valores diferentes<br>";
    echo '$a:'.$a.' $b:'.$b.'<br>';
}

$b = 10;
$a = "10";

// Quando usa == (dois sinais de igual)
// compara apenas o conteúdo das variáveis e não o tipo
echo '<hr>';
echo 'Comparação usando ==';
if ($a == $b) {
    echo "Valores iguais<br>";
    echo '$a (string):'.$a.' $b(inteiro):'.$b.'<br>';
} else {
    echo "Valores diferentes<br>";
    echo '$a (string):'.$a.' $b(inteiro):'.$b.'<br>';
}

// Quando usa === (três sinais de igual)
// compara o conteúdo e o tipo das variáveis
echo '<hr>';
echo 'Comparação usando ===';
if ($a === $b) {
    echo "Valores iguais<br>";
    echo '$a (string):'.$a.' $b(inteiro):'.$b.'<br>';
} else {
    echo "Valores diferentes<br>";
    echo '$a (string):'.$a.' $b(inteiro):'.$b.'<br>';
}

// Quando usa === (três sinais de igual)
// compara o conteúdo e o tipo das variáveis
$b = 10;
$a = 10.0;
echo '<hr>';
echo 'Comparação usando ===';
if ($a === $b) {
    echo "Valores iguais<br>";
    echo '$a (float):'.$a.' $b(inteiro):'.$b.'<br>';
} else {
    echo "Valores diferentes<br>";
    echo '$a (float):'.$a.' $b(inteiro):'.$b.'<br>';
}

echo '<hr>';
// op1 += op2
// op1 = op1 + op2
$a += 10;  // $a = $a + 10;
