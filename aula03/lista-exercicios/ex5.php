<?php
/* Escreva  um  programa  PHP  que  percorra  um  
vetor  $numero  com  10  posições  e  exiba  o  menor  
e  o maior número existente nesse vetor. 
Suponha que o conteúdo do vetor seja o seguinte: 

*/

$numero = array(45, 21, 11, 10, 8, 20, 35, 15, 22, 50);

$menor = $numero[0];
$maior = $numero[0];
for($i=0;$i<count($numero);$i++){
    echo $numero[$i]."<br>";
    if ($numero[$i] < $menor) {
        $menor = $numero[$i];
    }
    if ($numero[$i] > $maior) {
        $maior = $numero[$i];
    }

}
echo 'O maior número no vetor é '.$maior.'<br>';
echo 'O menor número no vetor é '.$menor.'<br>';
