<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6</h1>
    <p>Escreva um programa PHP que percorra o vetor $numero e conte quantos números contidos nesse 
vetor são maiores do que 15. Exiba o resultado dessa contagem. Para testar use os valores do exercício 5.</p>
    <?php
        $numero = array(5, 11, 7, 10, 8, 20, 35, 15, 99, 50);

        // variável para armazenar a quantidade de números maiores que 15
        $qtd_maior = 0;
        for($i=0; $i<count($numero); $i++) {
            echo "<p>$i : $numero[$i]</p>";
            if ($numero[$i]> 15) {
                $qtd_maior++;
            }
        }
        echo '<p> A quantidade de números maiores que 15 é:'.$qtd_maior.' (usando for).</p>';

        // server para percorrer um vetor automaticamente
        // não é necessário usar uma variável como contador
        // percorrerá o vetor $numero e colocar o valor da posição visitada 
        // na variável $n e a posição na variável $p
        $qtd_maior = 0;
        foreach($numero as $p=>$n){
            echo "<p>$p : $n</p>";
            if ($n > 15){
                $qtd_maior++;
            }
        }

        echo '<p> A quantidade de números maiores que 15 é:'.$qtd_maior.' (usando foreach).</p>';



    ?>
</body>
</html>