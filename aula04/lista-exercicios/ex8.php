<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8</h1>
    <p>Suponha que em um programa PHP há dois vetores $x e $y cada um contendo 10 números. Escreva 
um programa que some  as posições correspondentes e exiba o valor de $x, $y e a soma. Use os comandos 
abaixo para inicializar os valores:   <br>
$x = array(1, 3, 5, 7, 8, 11, 13, 15, 17, 19);   <br>
$y = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);    <br>
Com esses valores deve produzir o seguinte resultado:   <br>
x: 1 – y: 2 – Soma: 3     <br>
x: 3 – y: 4 – Soma: 7    <br>
x: 5 – y: 6 – Soma: 11   <br>
x: 7 – y: 8 – Soma: 15   <br>
... e assim por diante </p>
    <?php
        $x = array(1, 3, 5, 7, 8, 11, 13, 15, 17, 19);   
        $y = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);    

        for($i=0;$i<count($x);$i++) {
            echo "<p>posição: $i - x: $x[$i] - y: $y[$i] - Soma:".$x[$i] + $y[$i]."</p>";
        }


    ?>
    
</body>
</html>