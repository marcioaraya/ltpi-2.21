<?php
/*
4) Escreva  um  programa  PHP  que  exiba  o  conteúdo  
de  um  vetor  $nomes  em  uma  tabela  HTML.  
O conteúdo desse vetor são dez nomes. 
(fique a vontade para escolher os nomes que irá atribuir 
a cada posição do vetor).
*/
$nome =["Matheus","Luy", "João", "Marcio", "Marcos", "Lucas", "João", "Paulo", "Tiago", "Pedro"];

# escrever todos os nomes em uma coluna

echo '<table border="1">';
for($i=0; $i < count($nome);$i++){
    echo "<tr><td>$nome[$i]</td></tr>";
}
echo '</table>';    

echo "<hr>";

# escrever todos nomes em uma única linha
echo '<table border="1">';
echo '<tr>';
for($i=0; $i < count($nome);$i++){
    echo "<td>$nome[$i]</td>";
}
echo "</tr>";
echo '</table>';    

?>







