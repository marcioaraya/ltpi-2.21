<?php
$media = 7;

if ($media >= 6) {
    $situacao = "aprovado";
} else {
    $situacao = "reprovado";
}

# reescrevendo o if com operador ternário
$situacao = ($media >= 6)?"aprovado":"reprovado";