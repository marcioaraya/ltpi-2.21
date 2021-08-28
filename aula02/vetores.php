<?php

$nome = array("Marcio", "Luy", "João", "Matheus");
print_r($nome);
echo '<hr>';
$outrosNomes = ["Mateus", "Marcos", "Lucas", "João"];
print_r($outrosNomes);
echo '<hr>';
$maisNomes[0] = "Paulo";
$maisNomes[1] = "Lucas";
$maisNomes[2] = "Timóteo";
# cria a próxima posição do vetor: 3
$maisNomes[] = "Filemon";
$maisNomes[] = "Pedro";

print_r($maisNomes);
echo '<hr>';

$notas["Luy"]=10.0;
$notas["Mateus"]=10.0;
print_r($notas);
echo '<hr>';
$notas=["Luy"=>10.0, "Mateus"=>10.0];
print_r($notas);
echo '<hr>';
$notas=array("Luy"=>10.0, "Mateus"=>10.0);
print_r($notas);
echo '<hr>';



