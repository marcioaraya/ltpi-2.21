<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7</h1>
    <p>Escreva um programa PHP que percorra o vetor $numero e verifique  se  o  valor  10  está  contido  em 
alguma posição do vetor. Caso exista, exiba a mensagem “O número 10 está contido na posição $i do vetor” 
se não existir exiba a mensagem “Não foi localizado o número 10 no vetor”. Utilize a instrução foreach. Use 
os valores do exercício 6. </p>
    <?php
        $numero = array(5, 11, 7, 10, 8, 20, 35, 15, 10, 50);

        echo '<p>Mostra a última posição do 10 no vetor
              (se o número 10 ocorrer mais de uma vetor)</p>';
        echo '<table border="1">';
        echo '<tr><th>Posição</th><th>Valor</th><tr>';
        foreach($numero as $p=>$n){
            echo "<tr><td>$p</td><td>$n</td></tr>";
            if($n == 10){
                $posicao = $p;
            }
        }
        echo "</table>";

        if ($posicao == -1){
            echo '<p>Não foi localizado o número 10 no vetor</p>';
        } else {
            echo "<p>O número 10 está contido na posição $posicao do vetor.</p>";
        }

        echo '<p>Mostra a primeira posição do 10 no vetor
              (se o número 10 ocorrer mais de uma vetor). 
              Usamos break para interromper o laço de repetição</p>';

        $posição = -1;
        foreach($numero as $p=>$n){
            if($n == 10){
                $posicao = $p;
                break;
            }
        }
        // mostra a última posição do 10 no vetor (se o número 10 ocorrer mais de uma vez)
        if ($posicao == -1){
            echo '<p>Não foi localizado o número 10 no vetor</p>';
        } else {
            echo "<p>O número 10 está contido na posição $posicao do vetor.</p>";
        }

    ?>

    
</body>
</html>