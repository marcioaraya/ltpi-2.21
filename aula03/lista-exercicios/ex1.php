<?PHP 
# exercício 1 - escreva os números de 100 a 0 em ordem decrescente

$contador = 100;                  # antes
while ($contador >= 0 ) {         # condicao
    echo $contador . "<br>"; 
    $contador = $contador - 1;    # depois
} 
echo 'Acabou!<br>';


/*
for(antes;condição;depois){
    instruções a repetir
}
*/
echo '<h2> exercício 2</h2>';
for($contador=100; $contador>=0; $contador--){
    echo "$contador<br>";

}


echo '<h2>Exercício 3 - do while</h2>';

$contador = 100;                  
do  {  
            
    echo $contador . "<br>"; 
    $contador = $contador - 1; 
    
} while ($contador >= 0 );
echo 'Acabou!<br>';