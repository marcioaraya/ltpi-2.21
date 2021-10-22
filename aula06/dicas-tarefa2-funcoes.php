<?php


$cpf=12345678;
echo "cadeia de caracteres: $cpf <br>";
echo "tamanho da string:".mb_strlen($cpf)."<br>";
echo "acrescentar zeros à esquerda<br>";
$cpf = "00000000000" . $cpf;
echo "cadeia de caracteres: $cpf <br>";
echo "pegar os 11 caracteres mais a direita da string. O CPF tem 11 dígitos.<br>";
echo "use a função mb_substr(). Se informar uma quantidade negativa de caracteres retornará a a parte final da string<br>";
$cpf = mb_substr($cpf, -11);
echo "$cpf<br>";
$parte1=mb_substr($cpf, 0, 3);
$parte2=mb_substr($cpf, 3, 3);
$parte3=mb_substr($cpf, 6, 3);
$parte4=mb_substr($cpf, 9, 2);
echo $parte1."<br>";
echo $parte2."<br>";
echo $parte3."<br>";
echo $parte4."<br>";
echo "Só fica faltando concatenar '.' e '-' para ficar no formato de CPF<br>";

/* dica para o exercício 'f'
use explode() para quebrar a string $texto em um vetor com as palavras de $texto. 
cada posicao do vetor irá conter uma palavra.
percorra esse vetor com as palavras de $texto usando foreach
- para cada palavra, busque essa palavra no vetor $busca (use array_search ou algo parecido)
- se encontrar a palavra, acrescente '<span style="color:red">' antes 
           da palavra encontrada e '</span>' após   
- concatene  essa palavra a uma variavel que irá conter o texto que será
  devolvido pela função  
  
*/
