<?php
# precedencia de operadores

$a = 10;
$b = 20;

# incorreto, porque a divisão tem maior precedência que a soma
# quer dizer que vai dividir o conteúdo de $b por 2 e depois
# somar o resultado com o conteúdo de $a
$media = $a + $b / 2;
echo '$media = $a + $b / 2; => Incorreto!<br>';
echo '$a:'.$a.' $b:'.$b.' $media:'.$media.'<br>';
echo '<hr>';
# 
echo 'podemos usar parenteses para alterar a precedência<br> ';
$media = ($a + $b) / 2;
echo '$media = ($a + $b) / 2; => Correto!<br>';
echo '$a:'.$a.' $b:'.$b.' $media:'.$media.'<br>';
echo '<hr>';

